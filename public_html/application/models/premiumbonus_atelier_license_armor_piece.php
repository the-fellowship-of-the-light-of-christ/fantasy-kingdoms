<?php defined('SYSPATH') OR die('No direct access allowed.');

class PremiumBonus_Atelier_License_Armor_Piece_Model extends PremiumBonus_Atelier_License_Model
{
	
	var $name = '';
	var $info = array();
	var $canbeboughtonce = false;
			
	function __construct()
    {
        $this -> name = 'atelier-license-armor_piece';
	}
}
