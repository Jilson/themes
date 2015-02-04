<?php
/*** Theme setup ***/
add_filter('widget_text', 'do_shortcode');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
require_once('includes/wp_bootstrap_navwalker.php');

/*** Google Authorship ***/
add_action('wp_head', 'add_google_rel_author');
function add_google_rel_author() { echo '<link rel="author" href="" />'; }

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