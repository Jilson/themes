<?php
/*** Theme setup ***/
add_filter('widget_text', 'do_shortcode');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
remove_action('wp_head', 'wp_generator');
require_once('includes/wp_bootstrap_navwalker.php');

//Include all files in the post-types and taxonomies folder

foreach ( glob(get_template_directory() . '/post-types/*.php') as $post_type ) {
    require_once $post_type;
}
foreach ( glob(get_template_directory() . '/taxonomies/*.php') as $taxonomy ) {
    require_once $taxonomy;
}

/*** Google Authorship ***/
add_action('wp_head', 'add_google_rel_author');
function add_google_rel_author() { echo '<link rel="author" href="" />'; }

// Enable visibility options for gravity forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( 'thumb825x450', 825, 450, true ); // (cropped)
}

// Add default theme options page
if( function_exists('acf_add_options_page') ) {
 acf_add_options_page();
}

// Enqueue styles and scripts
function theme_name_scripts() {

    wp_enqueue_style( 'style-slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css' );
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.5', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '3.2.0', true );
    wp_enqueue_script( 'customJS', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'respond', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', array(), '1.4.2', true );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1.5.7', true );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/*** Sidebars ***/
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'=>'Sidebar',
		'id'=>'sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'=>'Blog Sidebar',
		'id'=>'blog',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
?>