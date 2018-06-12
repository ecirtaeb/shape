<?php

class Ellipse extends Shape {

	public $rayX;
	public $rayY;

	function __construct() {

		parent::__construct();
		$this->rayX = 200;
		$this->rayY = 100;
	}


	function setRay($rayons) {

		$this->rayX =  $rayons[0];
		$this->rayY =  $rayons[1];
	}


	public function draw() {

		$svg = <<<FORMAT
	
		<ellipse  cx="{$this->pos1->X}" cy="{$this->pos1->Y}" opacity="{$this->opacity}" rx="{$this->rayX}" ry="{$this->rayY}"
  		fill="{$this->color}" stroke-width="2" /> 

FORMAT;

		return $svg;
	}
}
