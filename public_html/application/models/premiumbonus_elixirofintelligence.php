<?php defined('SYSPATH') OR die('No direct access allowed.');
class PremiumBonus_elixirofintelligence_Model extends PremiumBonus_Model{	function __construct()    {        $this -> name = 'elixirofintelligence';	}
	function postsaveactions( $char, $cut, $par, &$message )	{
		$info = $this -> get_info();		$item = Item_Model::factory( null, $this -> name );		$item -> additem( 'character', $char-> id, $info['cuts'][$cut]['cut'] );
		parent::postsaveactions($char, $cut, $par, $message );		return true;
	}

}
