<?php

class Triangle extends Shape {

	public $pos2;
	public $pos3;
	
	function __construct() {

		parent::__construct();

		$this->pos2 = new Point(50,100);
		$this->pos3 = new Point(150,300);

	}
	
	function setPoints($points) {

		$this->pos2->X = $points[0];
		$this->pos2->Y = $points[1];
		$this->pos3->X = $points[2];
		$this->pos3->Y = $points[3];
	}

	public function draw() {

		$svg = <<<FORMAT
	
  		<polygon points="{$this->pos1->X},{$this->pos1->Y} {$this->pos2->X},{$this->pos2->Y} {$this->pos3->X},{$this->pos3->Y}"
						 style="fill:{$this->color};stroke:purple;stroke-width:1"
			 />
FORMAT;

		return $svg;
	}
	
}