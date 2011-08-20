<?php

/**
*	Object Registry
*
* 	Theme Name:     Cogsprocket WP 3.2 Framework
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for Cogsprocket WordPress Themes.
* 	Author:         Steven Dawson
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Cogsprocket WP 3.2 Framework
* 	Version:        0.1.0
* 	File Nmae: 		taxonomyRegistry.inc.php
*						Object for registering taxonomies
*/


class taxonomy {
	
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