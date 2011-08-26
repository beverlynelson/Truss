<?php
/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/


// Basic WordPress options.  
// These will be pulled into Truss framework and made for easier manipulation through the truss parent object.
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
  add_image_size('index-categories', 150, 150, true);
  add_image_size('page-single', 350, 350, true);
}
  require_once("truss/truss.php");

// ------------------------------------------------------- //	

// Some commonly used components.

  $truss->customMenu->Name = "Main Navigation";
  $truss->customMenu->Slug = "main-navigation";
  $truss->customMenu->Create();

  $truss->widgetArea->Name = "Footer (Left)";
  $truss->widgetArea->Description = "Widgets that appear in the footer on the left hand side.";
  $truss->widgetArea->Create();

  $truss->postType->Name = "Tutorials";
  $truss->postType->Singular = "Tutorial";
  $truss->postType->Create();
	
	


?>