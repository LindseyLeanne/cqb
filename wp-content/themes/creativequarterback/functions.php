<?php

// Current Page - Add Body Classes
function current_page() {
	$alias = $_SERVER['REQUEST_URI'];
	if ($alias === '/') {
		return 'front';
	} else {
		$alias = rtrim($alias, '/');
		return str_replace('/', ' page-', $alias);
	}
}

// Add custom menu support
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


// function register_category_menu() {
//   register_nav_menu('category-menu',__( 'Category Menu' ));
// }
// add_action( 'init', 'register_category_menu' );

add_image_size('image-0-75', 0, 75, false);


// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );


function custom_excerpt_length( $length ) {
return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 25 );

function new_excerpt_more( $more ) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Options Pages

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Client Logos',
		'menu_title'	=> 'Client Logos',
		'menu_slug' 	=> 'client-logos',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Blog Settings',
		'menu_title'	=> 'Blog Settings',
		'menu_slug' 	=> 'blog-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}

?>
