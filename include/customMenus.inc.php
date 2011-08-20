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

class customMenus {
	
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
