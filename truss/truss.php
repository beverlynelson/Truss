<?php
/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for Cogsprocket WordPress Themes
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Truss
* 	Version:        0.1.0
*/
// ------------------------------------------------------- //	

require_once("include/truss.truss.php");
require_once("include/trussWork.truss.php");
$truss = trussWork::singleton();

// Build core TrussWork

$truss->register('postType');
$truss->register('widgetArea');
$truss->register('customMenu');
