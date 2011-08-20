<?php
/**
* 	Theme Name:     Cogsprocket WP 3.2 Framework
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for Cogsprocket WordPress Themes
* 	Author:         Steven Dawson
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Cogsprocket WP 3.2 Framework
* 	Version:        0.1.0
* 	File Nmae: 		functions.php
*/

// Basic WordPress options.
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('index-categories', 150, 150, true);
	add_image_size('page-single', 350, 350, true);
}

	require_once("include/objectRegistry.inc.php" );
	require_once("include/customMenus.inc.php");
	require_once("include/taxonomy.inc.php");
	require_once("include/postType.inc.php");
	require_once("include/widgetArea.inc.php");
	require_once("include/postTemplates.inc.php");

//	Initiate core objects
	$registry = new objectRegistry();
	$menus = new customMenus();
	$postType = new postType();
	$widgetArea = new widgetArea();
	$taxonomy = new taxonomy();

// ------------------------------------------------------- //	



//	Create custom navigation\
	
	$menus->Name = "Main Navigation";
	$menus->Slug = "main-navigation";
	$menus->Create();

  $widgetArea->Name = "Footer (Left)";
  $widgetArea->Label = "Widgets that appear in the footer on the left hand side.";

	$postType->Name = "Tutorials";
	$postType->Singular = "Tutorial";
	$postType->Create();



//	Create Widget Areas	
///  Example:
///  $widget->Name = "Left Sidebar";
///  $widget->Description = "Widgets to display in the sidebar.";



	

//  Create Slider Assignment and display



?>