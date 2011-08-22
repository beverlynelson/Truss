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

class trussWork  {
  
  private static $instance;
  private static $settings = array();
  private static $trusses = array(
    "postType" => "postType",
    "widgetArea" => "widgetArea",
    "customMenu" => "customMenu"
  );

  private function __construct() {
  }
  
  public static function singleton() {

    if (!isset(self::$instance)) {
      $truss = __CLASS__;
      self::$instance = new $truss;
    }
    
    return self::$instance;

  }
  
  public function register($truss = 0) {
    require_once($truss . ".truss.php");
    $this->{$truss} = new $truss(self::$instance);
  }
  
  public function setting($data, $key) {
    self::$settings[$key] = $data;
  }

  public function __clone() {
    trigger_error("Truss :: Cloning Trusswork is Forbidden", E_USER_ERROR);
  }

}

?>