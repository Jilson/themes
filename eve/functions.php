<?php
/*** Theme setup ***/
add_filter('widget_text', 'do_shortcode');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
require_once('includes/wp_bootstrap_navwalker.php');

/*** Google Authorship ***/
add_action('wp_head', 'add_google_rel_author');
function add_google_rel_author() { echo '<link rel="author" href="" />'; }

// Enable visibility options for gravity forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( 'blog-thumb', 795, 300, true ); // (cropped)
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

    wp_dequeue_script( 'jquery' );

    wp_enqueue_script( 'jquery_new', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.5', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '3.2.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'customJS', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'respond', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js', array(), '1.4.2', true );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1.5.7', true );
    wp_enqueue_script( 'ajax-pagination', get_template_directory_uri() . '/js/ajax-pagination.js', array('jquery'), '1.0.0', true );
    wp_localize_script( 'ajax-pagination', 'ajaxpagination', array('ajaxurl' => admin_url( 'admin-ajax.php' ),'query_vars' => json_encode( $wp_query->query )));

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* Pagination */
add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

function my_ajax_pagination() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );


    $query_vars['paged'] = $_POST['page'];
    $query_vars['post_status'] = 'publish';

    if(isset($_POST['search']) && !empty($_POST['search'])) {
     $query_vars['s'] = $_POST['search'];
    }
    if(isset($_POST['cat']) && !empty($_POST['cat'])) {
     $query_vars['cat'] = $_POST['cat'];
    }
    if(isset($_POST['auth']) && !empty($_POST['auth'])) {
     $query_vars['author'] = $_POST['auth'];
    }

    $posts = new WP_Query( $query_vars );
    $GLOBALS['wp_query'] = $posts;

    add_filter( 'editor_max_image_size', 'my_image_size_override' );

    if( ! $posts->have_posts() ) { 
        echo 'Sorry, no posts were found!';
    }
    else {
        while ( $posts->have_posts() ) { 
            $posts->the_post();
            get_template_part('loop', 'ajax');
        }
    }
    

    global $wp_query;
    $big = 999999999;
    echo '<div class="paginate">';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?page=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false
    ) );
    echo '</div>';
    die();
}

function my_image_size_override() {
    return array( 795, 300 );
}

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