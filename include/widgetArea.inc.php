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

class widgetArea {
	
	public $Name = "";
	private $ID = 1;
	public $Description = "";
	public $BeforeTitle = "";
	public $AfterTitle = "";
	public $BeforeWidget = "";
	public $AfterWidget = "";
	
	public function __construct($_name = 0, $_description = 0) {
		
	}
	
	public function Create() {
		register_sidebar(array(
			'name' => $this->Name,
			'id' => $this->ID,
			'description' => $this->Description,
			'before_title' => $this->BeforeTitle,
			'after_title' => $this->AfterTitle,
		  	'before_widget' => $this->BeforeWidget,
			'after_widget' => $this->AfterWidget
		));
		$this->ID++;
	}
	
}
	
	
?>
