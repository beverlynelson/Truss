<?php

/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/



class taxonomy  {
	
	public $Name = "";								// Taxonomy name
	public $Type = "";								// Taxonomy type
	public $Args = "";								// Taxonomy creation arguments
	public $Label = "";								// Taxonomy Label
	
	public function __construct($_name, $_type = 0, $_label = 0) {
		$this->Name = $_name;
		$this->Type = $_type;
		// $this->Args = $_args;
		$this->Label = $_label;
	}
	
	public function Create() {
		register_taxonomy(
			$this->Name,
			$this->Type,
			array(
				'label' => __( $this->Label ),
				'sort' => true,
				'args' => array( 'orderby' => 'term_order' ),
				'rewrite' => array( 'slug' => 'person' )
			)
		);
	}
}
?>