<?php

class Bike
{
	public $gears = [1, 2];
	public $active_gear = 1;
	public $colour;
	public $type;
	public $wheels_size;

	function setGear($gear){
		if(in_array($gear, $this->gears)){
			$this->active_gear = $gear;
		}
	}
}

$sombra = new Bike();




?>