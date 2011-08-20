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

class trussWork {

  private static $instance;
  
  private $registeredObjects  = array(
    /* 'postTemplate' => 'postTemplate',   // Not currently in object model */
    'customMenu' => 'customMenu',
    'postType' => 'postType',
    'taxonomy' => 'taxonomy',
    'widgetArea' => 'widgetArea'
  );

  public function __construct() {

  }
  
  // Singleton method
  private function register() {
    
    if (!isset(self::$instance)) { // Check that the object has not had its instance set yet.
        self::$instance = new self; // Set the instance of the object to be the name of the object.
    } 
    return self::$instance; // Return the object's instance.
  }

  public function plugin($name) {
    
    $class = array_key_exists($name, $this->registeredObjects) ? $this->registeredObjects[$name] : ucfirst($name);  // Check the trussWork registry
    
    $file = dirname(__FILE__) . "/$name.truss.php"; // set the file name for the registered object.
    
    if (!isset(self::$name) && file_exists($file)) { // Check that the object is not currently in trussWork and that a file exists for that object
      // Add the object to trussWork and set itself to a child object of trussWork
      require_once($file);                          
      return $this->$name = call_user_method('register', $class);  
    } else {
      trigger_error("Truss ::: Non-Truss object '$name' could not be loaded!", E_USER_ERROR)
    }
    
  }

}

?>