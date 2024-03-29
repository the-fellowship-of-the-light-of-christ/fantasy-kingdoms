<?php defined('SYSPATH') OR die('No direct access allowed.');

class ST_Breeding_Pig_Region_Model extends Structure_Model
{
	
	public function init()
	{		
		$this -> setIsbuyable(false);
		$this -> setIssellable(false);						
		$this -> setBaseprice(100);
		$this -> setWikilink('Farms');	
	}

	public function build_common_links( $structure ) 
	{
	
		$links = parent::build_common_links( $structure );
		
		$links .= html::anchor( "/structure/info/" . $structure -> id, Kohana::lang('structures_actions.global_info'), 
			array('class' => 'st_common_command')) . "<br/>" ;		
		$links .= Kohana::lang('items.size') . ': ' . Kohana::lang('global.' . $structure -> size ) . '<br/>';		
		$links .= Kohana::lang('structures_breeding_pigs.pigs_structure') . $structure->structure_type->attribute2 ."<br/>";
		$links .= '<br/>';		
		
		if ( $structure -> region -> is_independent() == false ) 
			
			$links .= html::anchor( "/breeding/buyanimals/" . $structure -> structure_type -> type, Kohana::lang('structures_actions.breeding_buyanimals'),
				array('class' => 'st_common_command' )). "<br/>";		
		
		return $links;
	
	}
	
	// Funzione che costruisce i links relativi
	// @output: stringa contenente i links relativi a questa struttura

	public function build_special_links( $structure )
	{
	
	}

}
