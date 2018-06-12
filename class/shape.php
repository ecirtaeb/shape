<?php

class Shape {

	public $color;
	public $pos1;
	public $opacity;

	function __construct() {
		$this->color = 'pink';
		$this->pos1 = new Point(10,10);
		$this->opacity = 1;

	}

	function setColor($color) {

		$this->color = $color;
	}

	function setOpacity($val) {

		$this->opacity = $val;
	}
	
	function setPos($point) {

		$this->pos1->X = $point[0];
		$this->pos1->Y = $point[1];
	}

/*	function setPos($valX, $valY) {

		$this->posX = $valX;
		$this->posY = $valY;
	}
	*/
}
