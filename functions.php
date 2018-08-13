<?php



function lizaline_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('cycle2', get_template_directory_uri() . '/js/cycle2.js');
	wp_enqueue_script('carousel', get_template_directory_uri() . '/js/cycle2-carousel.js');


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
add_image_size( 'journal-thumb', 800, 800 );

// Categories on pages

function myplugin_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );

// Widgets
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );


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



?>