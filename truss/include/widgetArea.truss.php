<?php

/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/


class widgetArea  {
	
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
	
	public function Reveal($name) {
	    if (!function_exists('dynamic_sidebar') || !dynamic_sidebar($name)) {
        
      }
	}
	
}
	
	
?>
