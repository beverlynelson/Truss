<?php

/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for WordPress Themes.
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Truss
* 	Version:        0.1.0
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
	
	// Singleton method
  private function register() {
    
    if (!isset(self::$instance)) { // Check that the object has not had its instance set yet.
        self::$instance = new self; // Set the instance of the object to be the name of the object.
    } 
    return self::$instance; // Return the object's instance.
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