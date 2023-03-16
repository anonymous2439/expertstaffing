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
    wp_enqueue_script('custom-theme-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('custom-theme-jquery'), $version, 'all');
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
}
add_action('widgets_init', 'customtheme_widget_areas');


// function that runs when shortcode is called
function home_shortcode() { 
  
    // Things that you want to do.
    $message = get_template_directory_uri(); 
      
    // Output needs to be return
    return $message;
}
    // register shortcode
add_shortcode('contenturl', 'home_shortcode');



function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.google.com';
    $phpmailer->SMTPAuth = true; // Ask it to use authenticate using the Username and Password properties
    $phpmailer->Port = 587;
    $phpmailer->Username = 'vivo5plus2439@gmail.com';
    $phpmailer->Password = '41324372439';

    // Additional settings…
    $phpmailer->SMTPSecure = 'tls'; // Choose 'ssl' for SMTPS on port 465, or 'tls' for SMTP+STARTTLS on port 25 or 587
    $phpmailer->From = "vivo5plus2439@gmail.com";
    $phpmailer->FromName = "Neil Axinto";
}
// add_action( 'phpmailer_init', 'my_phpmailer_example' );

// if(isset($_POST['send_test_mail'])){    
//     if(isset($_POST['email']))
//         $to = $_POST['email'];
//     else{
//         $to = 'axintoneil@gmail.com';
//     }
//     $subject = 'axintoneil.com mail';
//     if(isset($_POST['message']))
//         $message = $_POST['message'];
//     else{
//         $message = "message is empty";
//     }

//      add_action( 'phpmailer_init', 'my_phpmailer_example' );          

//     wp_mail( $to, $subject, $message );

//     remove_action( 'phpmailer_init', 'my_phpmailer_example' );

//     echo '<script>alert("icheck daw imo mail if nasend na ba...");</script>';
// }

  

    // $to = 'axintoneil@gmail.com';
    // $subject = 'test php mailer';
    // $message = "message is empty";
    

    // add_action( 'phpmailer_init', 'my_phpmailer_example' );          

    // wp_mail( $to, $subject, $message );

    // remove_action( 'phpmailer_init', 'my_phpmailer_example' );

    // echo '<script>alert("check mail...");</script>';



    if(isset($_POST['submit_contact'])){
        $servername = "localhost";
        $database="workplace";
        $username = "root";
        $password = "";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $query = $conn->prepare("INSERT INTO forms (mail_from, mail_to, mail_subject, mail_message) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $from, $to, $subject, $message);

        $from = $_POST['contact_name'];
        $to = "vivo5plus2439@gmail.com";
        $subject = "Test subject";
        $message = $_POST['message'];

        $query->execute();

        $query->close();
        $conn->close();
    }

?>