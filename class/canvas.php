<?php

class Canvas {

	protected $shapes;
	
	function __construct() {

		$this->shapes = [];

	}
	
	function addShape($shape) {

		$this->shapes[]= $shape;
	}

	function draw() {

		$dessin = "";

		foreach ( $this->shapes as $shape ) {

			$dessin .= $shape->draw();
		}

		return($dessin);

	}

}