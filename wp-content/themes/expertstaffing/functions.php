<?php

function customtheme_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('small', 400, 267, true);
    add_image_size('banner', 1920, 400, true);
}
add_action('after_setup_theme', 'customtheme_theme_support');

// Register Menu
function customtheme_menus(){
    $locations = array(
        'primary' => 'Main Menu',
        'page' => 'Page Menu',
        'footer' => 'Footer Menu'
    );
    register_nav_menus($locations);
}
add_action('init', 'customtheme_menus');

// enqueue styles
function customtheme_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('custom-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('custom-theme-media', get_template_directory_uri() . '/assets/css/media.css', array(), $version, 'all');
    wp_enqueue_style('custom-theme-comments', get_template_directory_uri() . '/assets/css/comments.css', array(), $version, 'all');
    wp_enqueue_script('custom-theme-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js', array(), '3.6.3', 'all');
    // wp_enqueue_script('custom-theme-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('custom-theme-jquery'), $version, 'all');
    wp_enqueue_script('custom-theme-animateit', get_template_directory_uri() . '/assets/js/css3-animate-it.min.js', array('custom-theme-jquery'), [], 'all');
    wp_enqueue_style('custom-theme-animations', get_template_directory_uri() . '/assets/css/animations.css', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'customtheme_register_styles');

// admin styles
function ghub_child_setup() {
    $version = wp_get_theme()->get('Version');
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
    // wp_enqueue_style('custom-theme-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');

}
add_action( 'after_setup_theme', 'ghub_child_setup' );


// Define the custom widget class
class Content_Header_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'content_header_widget',
            'Content Header Widget',
            array(
                'description' => 'Displays all content headers on the current page.',
            )
        );
    }

    public function widget( $args, $instance ) {
        global $post;

        // Get all the headers in the current post
        $headers = get_post_headers( $post->post_content );

        if ( ! empty( $headers ) ) {
            echo $args['before_widget'];
            echo $args['before_title'] . 'Headlines' . $args['after_title'];
            echo '<ul>';
            foreach ( $headers as $header ) {
                echo '<li><a href="#' . substr(sanitize_title( $header ), 0, 20) . '">' . strip_tags($header) . '</a></li>';
            }
            echo '</ul>';
            echo $args['after_widget'];
        }
    }
}


// Register sidebars
function customtheme_widget_areas(){
    register_sidebar( array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'description' => __( 'The primary widget area', 'customtheme' ),
        'before_widget' => '<div class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar( array(
        'name'          => __( 'Content Headers', 'your-theme' ),
        'id'            => 'content-headers',
        'description'   => __( 'Add widgets here to display all the content headers of a page.', 'your-theme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Job Openings', 'your-theme' ),
        'id'            => 'job-openings',
        'description'   => __( 'Add widgets here to display all the content headers of a page.', 'your-theme' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_widget( 'Content_Header_Widget' );
}
add_action('widgets_init', 'customtheme_widget_areas');


function my_custom_block_enqueue() {
    wp_enqueue_script(
      'my-custom-block',
      get_template_directory_uri() . '/blocks/job-openings.js',
      array( 'wp-blocks', 'wp-i18n', 'wp-block-editor' ),
      true
    );
  }
  add_action( 'enqueue_block_editor_assets', 'my_custom_block_enqueue' );


// Get all the headers in a post
function get_post_headers( $content ) {
    $headers = array();
    $pattern = '/<h([2-6])[^>]*>(.*?)<\/h\1>/si';
    preg_match_all( $pattern, $content, $matches );
    if ( ! empty( $matches[2] ) ) {
        $headers = $matches[2];
    }
    return $headers;
}

// Assigns id's to all content post header
function add_ids_to_headers($content) {
    $pattern = '/<h([2-6])(.*?)>(.*?)<\/h[2-6]>/i';
    
    $content = preg_replace_callback($pattern, function ($matches) {
        return sprintf('<h%s%s id="%s">%s</h%s>', $matches[1], $matches[2], substr(sanitize_title($matches[3]), 0, 20), $matches[3], $matches[1]);
    }, $content);
    return $content;
}

add_filter('the_content', 'add_ids_to_headers');


// function that runs when shortcode is called
function home_shortcode() { 
  
    // Things that you want to do.
    $message = get_template_directory_uri(); 
      
    // Output needs to be return
    return $message;
}
    // register shortcode
add_shortcode('contenturl', 'home_shortcode');


    function custom_post_views() {
        if (is_single() && !is_user_logged_in()) {
            $post_id = get_the_ID();
            $views = get_post_meta($post_id, 'post_views_count', true);
            if ($views == '') {
                $views = 0;
                add_post_meta($post_id, 'post_views_count', '0');
            } else {
                $views++;
                update_post_meta($post_id, 'post_views_count', $views);
            }
        }
    }
    add_action('wp_head', 'custom_post_views');

    function force_comments_open( $open, $post_id ) {
        $post = get_post( $post_id );
        if ( $post->post_type == 'post' || $post->post_type == 'page' ) {
            return true;
        }
        return $open;
    }
    add_filter( 'comments_open', 'force_comments_open', 10, 2 );

    // setting the samesite attribute
    function set_cookie_with_samesite_none() {
        setcookie( 'LAST_RESULT_ENTRY_KEY', 'cookie_value', [
            'expires' => time() + 3600,
            'path' => '/',
            'domain' => 'expertstaffingnews.com',
            'secure' => true,
            'httponly' => true,
            'SameSite' => 'None'
        ] );
    }
    add_action( 'init', 'set_cookie_with_samesite_none' );
?>