<?php

add_action( 'init', 'new_post_types' );
function new_post_types() {

	register_post_type('slider_top', array(
		'label'               => 'Home banner',
		'labels'              => array(
			'name'          => 'Slides',
			'singular_name' => 'Slide',
			'menu_name'     => 'Slider',
			'all_items'     => 'All slides',
			'add_new'       => 'Add slide',
			'add_new_item'  => 'Add new slide item',
			'edit'          => 'Edit',
			'edit_item'     => 'Edit it',
			'new_item'      => 'New item',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug'=>'slider_top', 'with_front'=>false, 'pages'=>false, 'feeds'=>true, 'feed'=>true ),
		'has_archive'         => 'cats',
		'query_var'           => true,
	  'supports' => array('title', 'thumbnail'),
	  'menu_icon' => 'dashicons-format-gallery'
	) );

	// services

	register_post_type('services', array(
		'label'               => 'Home page blocks',
		'labels'              => array(
			'name'          => 'Blocks',
			'singular_name' => 'Section',
			'menu_name'     => 'Home Sections',
			'all_items'     => 'All Sections',
			'add_new'       => 'Add section',
			'add_new_item'  => 'Add new section',
			'edit'          => 'Edit',
			'edit_item'     => 'Edit section',
			'new_item'      => 'New section',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'rewrite'             => array( 'slug'=>'section', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
		'has_archive'         => 'sections',
		'query_var'           => true,
	  'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
	  'menu_icon' => 'dashicons-admin-tools'
	) );

};


add_filter('template_include', 'templates');
function templates( $template ) {

	global $post;
	if( $post->post_type == 'section' ){
		$template = get_stylesheet_directory() . '/templates/section.php';
	};
// ____________________________________________________________

	if( is_archive() && $post->post_type == 'sections' ){
		$template = get_stylesheet_directory() . '/templates/sections-area.php';
	}
	// ____________________________________________________________

	if( is_search()){
		$template = get_stylesheet_directory() . '/templates/search.php';
	}

	if( is_404()){
		$template = get_stylesheet_directory() . '/templates/404.php';
	}

	return $template;

}

function get_the_cats( $id = 0, $cat ) {
	$tags = apply_filters( 'get_the_cats', get_the_terms( $id, $cat ) );
	$html = '';
  if ($tags) {
    foreach ($tags as $tag){
      $tag_link = get_tag_link($tag->term_id);
      $html .= $tag->name.', ';
    }
    $html = substr($html, 0, -2);
  }
	echo $html;
}

function services_id( $id = 0 ) {
	$tags = apply_filters( 'services_id', get_the_terms( $id, 'services_cat' ) );
	$html = '';
  if ($tags) {
    foreach ($tags as $tag){
      $tag_link = get_tag_link($tag->term_id);
      $html .= $tag->term_taxonomy_id;
    }
  }
	return $html;
}
function projects_id( $id = 0 ) {
	$tags = apply_filters( 'projects_id', get_the_terms( $id, 'projects_cat' ) );
	$html = '';
  if ($tags) {
    foreach ($tags as $tag){
      $tag_link = get_tag_link($tag->term_id);
      $html .= $tag->term_taxonomy_id;
    }
  }
	return $html;
}

?>
