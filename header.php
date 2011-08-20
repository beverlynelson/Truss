<?php 
/**
* 	Theme Name:     Cogsprocket's WP 3.2 Framework
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for WordPress Themes.
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Cogsprocket's WP 3.2 Framework
* 	Version:        0.1.0
* 	File Nmae: 		header.php
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<title><?php bloginfo('name'); ?> <?php wp_title("",true); ?></title>
		<?php 
			wp_head(); 
		?>
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/960.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	
	<body>
			
