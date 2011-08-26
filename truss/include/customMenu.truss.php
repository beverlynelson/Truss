<?php

/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/


class customMenu  {
	
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
