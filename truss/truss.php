<?php
/**
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    An Object Oriented WordPress Framework
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Version:        0.1.0
*/

// ------------------------------------------------------- //	

//require_once("include/truss.truss.php");
require_once("include/trussWork.truss.php");
$truss = trussWork::singleton();

// Build core TrussWork

$truss->register('postType');
$truss->register('widgetArea');
$truss->register('customMenu');
