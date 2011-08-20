<?php

/**
*
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for WordPress Themes.
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Truss
* 	Version:        0.1.0
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
	
	// Singleton method
  private function register() {
    
    if (!isset(self::$instance)) { // Check that the object has not had its instance set yet.
        self::$instance = new self; // Set the instance of the object to be the name of the object.
    } 
    return self::$instance; // Return the object's instance.
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