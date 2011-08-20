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

class customMenus extends truss {
	
	public $Name = "";
	public $Slug = "";
	
	public function __construct() {
		
	}
	
	public function Create() {
		register_nav_menus(
			array(
				$this->slug => __( $this->Name )
			)
		);
	}
}
