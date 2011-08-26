<?php 
/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/


	class adminPanel {
		
		public $panelName = "Cogsprocket Administration Panel";				// Administration Panel Name (Multiple Panels can exist)
		public $panelChildren = "";									// Child objects contained in Administration Panel (form objects)
		public $panelService = "";									// 
		
		public function __constrcut() {
			
		}
		
		// Singleton method
    private function register() {

      if (!isset(self::$instance)) { // Check that the object has not had its instance set yet.
          self::$instance = new self; // Set the instance of the object to be the name of the object.
      } 
      return self::$instance; // Return the object's instance.
    }
    
	}

?>