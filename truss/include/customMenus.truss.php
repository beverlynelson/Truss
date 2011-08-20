<?php

/**
*	Object Registry
*
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for WordPress Themes.
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Truss
* 	Version:        0.1.0
*/

class customMenus {
	
	public $Name = "";
	public $Slug = "";
	
	public function __construct() {
		
	}
	
	// Singleton method
  private function register() {
    
    if (!isset(self::$instance)) { // Check that the object has not had its instance set yet.
        self::$instance = new self; // Set the instance of the object to be the name of the object.
    } 
    return self::$instance; // Return the object's instance.
  }
	
	public function Create() {
		register_nav_menus(
			array(
				$this->slug => __( $this->Name )
			)
		);
	}
}
