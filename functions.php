<?php



function lizaline_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('backstretch', get_template_directory_uri() . '/js/backstretch.js');
}
add_action('wp_enqueue_scripts', 'lizaline_resources');

// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
'secondary' => __( 'Secondary Menu'),
));

// Featured images

add_theme_support( 'post-thumbnails' );

add_image_size( 'thumbnail-wide', 450, 300, true );
add_image_size( 'excerpt-thumb', 400, 400 );
add_image_size( 'journal-thumb', 900, 900, true );
add_image_size( 'similar-thumb', 100, 100, true );

// Categories on pages

function myplugin_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );


// Excerpts
// Length
function custom_excerpt_length() {
	return 90;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Remove ... after excerpt
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Add Custom Post Types
function custom_post_init() {
	  $args = array(
	  'supports' => array('title', 'editor', 'page-attributes'),
      'public' => true,
      'label'  => 'Products',
	  'menu_position' => 20,
	  'taxonomies' => array( 'category', 'post_tag' ),
	  'hierarchical' => true,
    );
    register_post_type( 'product', $args );
}
add_action( 'init', 'custom_post_init' );

// ACF Options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

?>