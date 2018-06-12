<?php

class Circle extends Ellipse {


	function __construct() {

		parent::__construct();
	}


	public function draw() {

		$svg = <<<FORMAT
	
		<circle cx="{$this->pos1->X}" cy="{$this->pos1->Y}" opacity="{$this->opacity}" r="{$this->rayX}"
  		fill="{$this->color}" stroke-width="2" /> 
FORMAT;

		return $svg;
	}
}
