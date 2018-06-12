<?php

class Rectangle extends Shape {

	public $height;
	public $width;

	function __construct() {

		parent::__construct();
		$this->height = 250;
		$this->width = 50;
	}

	function setSize($val) {

		$this->width = $val[0];
		$this->height = $val[1];
	}

	public function draw() {

		$svg = <<<FORMAT
	
		<rect x="{$this->pos1->X}" y="{$this->pos1->Y}" width="{$this->width}" opacity="{$this->opacity}" height="{$this->height}"
  		fill="{$this->color}" />
FORMAT;

		return $svg;
	}
}
