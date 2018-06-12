<?php

class Square extends Rectangle  {

	function __construct() {

		parent::__construct();

	}

	public function draw() {

		$svg = <<<FORMAT
	
		<rect x="{$this->pos1->X}" y="{$this->pos1->Y}" width="{$this->width}" opacity="{$this->opacity}" height="{$this->width}"
  		fill="{$this->color}" />
FORMAT;

		return $svg;
	}

}
