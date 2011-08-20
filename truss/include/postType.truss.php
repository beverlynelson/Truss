<?php 
/**
*	Object Registry
*
* 	Theme Name:     Truss
* 	Theme URI:      http: //cogsprocket.net/
* 	Description:    Core scaffolding for WordPress Themes.
* 	Author:         Stubby
* 	Author URI:     http: //cogsprocket.net
* 	Template:       Truss
* 	Version:        0.1.0
*/

class postType extends truss {
	
	public $Name = "";							// Post type name
	public $Singular= "";						// Post type name (Singular)
	public $Public = true;						// Post type public/private
	public $Archive = true;						// Allow post type to be archived
	public $Slug = "";							// Set a slug for permalinks

	public function __construct($_name = 0, $_singular = 0) {
		$this->Name = $_name;
		$this->Singluar = $_singular;
	}
	
	public function Create() {
		register_post_type( $this->Name,
			array(
				'labels' => array(
					'name' => __( $this->Name ),
					'singular_name' => __( $this->Singular )
				),
			'public' => $this->Public,
			'has_archive' => $this->Archive,
			'rewrite' => array('slug' => $this->Slug),	
			'supports' => array(
				  'title',
				  'editor',
				  'excerpt',
				  'trackbacks',
				  'custom-fields',
				  'revisions',
				  'thumbnail',
				  'author',
				  'page-attributes'
			  )
			)
		);
	}
	
}
?>