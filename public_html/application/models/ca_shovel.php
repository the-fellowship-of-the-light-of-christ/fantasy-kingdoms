<?php defined('SYSPATH') OR die('No direct access allowed.');
class CA_Shovel_Model extends Character_Action_Model
{
	// Costanti
	const DELTA_GLUT = 6;
	const DELTA_ENERGY = 12;

	protected $cancel_flag = true;
	protected $immediate_action = false;
	
	protected $basetime       = 3;  // 3 ore
	protected $attribute      = 'str';  // attributo forza
	protected $appliedbonuses = array ( 'workerpackage'); // bonuses da applicare
	
	// L'azione richiede che il personaggio indossi
	// un determinato equipaggiamento
	protected $requiresequipment = true;
	
	// Equipaggiamento o vestiario necessario in base al ruolo
	// Consume_rate = percentuale di consumo dell'item
	protected $equipment = array
	(
		'all' => array
		(
			'body' => array
			(
				'items' => array('any'),
				'consume_rate' => 'veryhigh'
			),
			'torso' => array
			(
				'items' => array('any'),
				'consume_rate' => 'veryhigh'
			),
			'legs' => array
			(
				'items' => array('any'),
				'consume_rate' => 'veryhigh'
			),
			'right_hand' => array
			(
				'items' => array('shovel'),
				'consume_rate' => 'veryhigh',
			),
		),
	);
	
	// Effettua tutti i controlli relativi al move, sia quelli condivisi
	// con tutte le action che quelli peculiari del dig
	// @input: $par[0] = structure, $par[1] = char, $par[2] = parametro coda di lavoro
	// @output: TRUE = azione disponibile, FALSE = azione non disponibile
	//          $messages contiene gli errori in caso di FALSE
	
	protected function check( $par, &$message )
	{ 
		// Check classe madre (compreso il check_equipment)
		if ( ! parent::check( $par, $message ) )					
		{ return false; }
		
		// Controllo che la regione sia conquistata
		if ( $par[0] -> region -> is_independent() )
		{	$message = Kohana::lang("charactions.regionisindependent"); return false;		}
		
		// controllo parametri URL
		$queuebonus = false;
		if ( Character_Model::get_premiumbonus( $par[1] -> id, 'workerpackage') !== false )			
			$queuebonus = true;
		
		/////////////////////////////////////////////////////////////////////////////////////
		// verifica la relazione diplomatica
		/////////////////////////////////////////////////////////////////////////////////////
		
		$rd = Diplomacy_Relation_Model::get_diplomacy_relation( $par[0] -> region -> kingdom_id, $par[1] -> region -> kingdom_id );
		
		if ( !is_null( $rd ) and ( $rd['type'] == 'hostile' or $rd['type'] == 'neutral' ))
		{				
			$message = kohana::lang('structures_market.error-hostileaccessdenied'); 
			return false;				
		}
		
		// Controllo, se il moltiplicatore è > 1, il char deve avere il bonus
		if ( !in_array ( $par[2], array( 1, 2, 3 )) or ($par[2] > 1 and ! $queuebonus ) )
				{ $message = Kohana::lang("global.operation_not_allowed"); return false; }
		
		// Controllo che il char abbia l'energia e la sazieta' richiesti
		if (
			$par[1]->energy < (self::DELTA_ENERGY * $par[2])  or
			$par[1] -> glut < (self::DELTA_GLUT * $par[2]) )
		{   $message = Kohana::lang("charactions.notenoughenergyglut"); return false; }

		
		if ( $par[2] > 1 )
		{
			$items = $this -> computeproduction( $par );		
			foreach ( $items as $key => $value )
			{
				foreach ( $par[0] -> structure_resource as $resource )
					if ( $resource -> resource == $key )				
						if ( $par[0] -> check_resource_status( $key, $value ) == false )
						{ $message = kohana::lang('ca_shovel.resourcenotenough'); return FALSE; }
			}		
		}
		else
		{
			$resource_status = $par[0] -> check_resource_status( $this -> get_resourcetype( $par ), 1 );		
			
			if ( $resource_status == false )
				{ $message = kohana::lang('ca_shovel.resourceisdepleted'); return FALSE; }
		}
		
		return true;
	}

	
	// Funzione per l'inserimento dell'azione nel DB.
	// Questa funzione appende solo una azione _non la esegue_
	// Al momento non si prevedono azioni istantanee.
	// @input: $par[0] = structure, $par[1] = char
	// @output: TRUE = azione disponibile, FALSE = azione non disponibile
	//          $messages contiene gli errori in caso di FALSE
	
	protected function append_action( $par, &$message )
	{
		
		$items = $this -> computeproduction( $par );
		$param2 = '';		
		// toglie la quantità alle risorse
		foreach ( $items as $key => $value )
		{
			foreach ( $par[0] -> structure_resource as $resource )
				if ( $resource -> resource == $key )
				{ 					
					$quantity = min ( $resource -> current, $value );					
					$param2 .= $key.'-'.$quantity.';';
					$resource -> modify_quantity( - $quantity );
					$resource -> save();
				}
		}
		$this->character_id = $par[1]->id;
		$this->starttime = time();			
		$this->status = "running";			
		$this->endtime = $this->starttime + $this->get_action_time( $par[1] ) * $par[2];
		$this->param1 = $par[0] -> id;
		$this->param2 = $param2;
		$this->param3 = $par[2];
		$this->param4 = $par[0] -> region_id ;
		$this->save();		
		
		$message = kohana::lang('ca_shovel.shovel-ok');	
		
		return true;
	}
	
	/*
	* Prevede quante unità estrarra in base alle caratteristiche
	* del char e ad altri parametri
	*/
	
	private function computeproduction( $par )
	{
		
		$resourcetype = $this -> get_resourcetype ( $par );
		$item = Item_Model::factory( null, $resourcetype );			
		$items[$item->cfgitem->tag] = $item -> computeproduction( $par[1] ) * $par[2];
		
		return $items ;
		
	}
	
	/** 
	* torna la risorsa associata con la struttura
	*/
	
	private function get_resourcetype( $par )
	{
		$resource = array (
			'cave_white_sand' => 'sand_heap',
			'mine_clay' => 'clay_piece',
			);
		
		return $resource[ $par[0] -> structure_type -> type ] ;
	
	}
	
	// Esecuzione dell' azione. 
	// Questa funzione viene chiamata quando viene invocata una 
	// complete_expired_action e gestisce le azioni
	// inserite nella character_actions
	// - si caricano i parametri dal database
	// - si esegue l' azione in base ai parametri
	// - si mette l' azione in stato completed
	
	public function complete_action( $data )
	{
		
		$char = ORM::factory( 'character', $data->character_id  );
		$structure = StructureFactory_Model::create( null, $data -> param1  );

		// Consumo degli items/vestiti indossati
		Item_Model::consume_equipment( $this->equipment, $char, $data->param3 );	
		
		// Sottraggo l'energia e la sazietà al char
		$char->modify_energy ( - self::DELTA_ENERGY * $data->param3, false, 'extractresources');
		$char->modify_glut ( - self::DELTA_GLUT * $data->param3);
		$char->save();	

		
		$items = explode ( ';', $data -> param2, -1);
		//kohana::log('debug', 'items: ' . kohana::debug($items )); exit; 
		foreach ( $items as $item )
		{
			list ( $itemtag, $quantity ) = explode ('-', $item ); 
			if ( $quantity > 0 )
			{
				$item = Item_Model::factory( null, $itemtag );				
				kohana::log('debug', 'Added item: ' . $item -> cfgitem -> tag ); 
				$item->additem("character", $char->id, $quantity);
				
				Character_Event_Model::addrecord( 
					$char -> id, 
				'normal', '__events.digitemok' . 
				';' . $quantity . 
				';__' . $item ->cfgitem -> name,
				'normal' );
				
				$char -> modify_stat( 'itemproduction', $quantity, $item->cfgitem->id );		
			}
			else
			{
						
				Character_Event_Model::addrecord( $char -> id, 'normal', '__events.digitemnotok', 'normal' );
			}
		}				
		
		// Cache
		My_Cache_Model::delete('-cfg-regions-resources');
		
		return; 
		
	}
	
	protected function execute_action() {}
	
	public function cancel_action( )
	{								$structure = StructureFactory_Model::create( null, $this -> param1 );
		$items = explode ( ';', $this -> param2, -1 );
		foreach ( $items as $item )
		{
			list ( $itemtag, $quantity ) = explode ('-', $item ); 
			foreach ( $structure -> structure_resource as $resource )
			if ( $resource -> resource == $itemtag )
			{ 					
				$resource -> modify_quantity( + $quantity );
				$resource -> save();
			}
		}
		return true;
	}
	
	// Questa funzione costruisce un messaggio da visualizzare 
	// in attesa che la azione sia completata.
	public function get_action_message( $type = 'long') 
	{
		$pending_action = $this->get_pending_action();
		$message = "";				
		
		if ( $pending_action -> loaded )
		{
			if ( $type == 'long' )					
			$message = '__regionview.shovel_longmessage';
			else
			$message = '__regionview.shovel_shortmessage';
		}
				
		return $message;
		
	}
	
}
