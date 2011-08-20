<?php

/**
*	******************************************************************
*	**	WARNING - This component is included in the current version **
*	** 	of this WordPress theme framework, however is not yet		**
*	**	implemented.  A statement of intent for this portion exists **
*	** 	after the header.											**
*	******************************************************************
*
*	Object Registry
*
* 	Theme Name:     Cogsprocket WP 3.2 Framework
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for Cogsprocket WordPress Themes.
* 	Author:         Steven Dawson
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Cogsprocket WP 3.2 Framework
* 	Version:        0.1.0
* 	File Nmae: 		objectRegistry.inc.php
*
*
*	Intent: 		This portion of the framework provides registration
*					for future objects in the framework so that the
*					functions file can remain clean.
*/

class objectRegistry {
	
	public $Exists = "";			//	Sanity check
	
	public function __construct () {
		$this->Exists = true;
	}
}

?>