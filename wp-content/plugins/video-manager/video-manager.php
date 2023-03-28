<?php
/*
Plugin Name: Video Manager plugin
Plugin URI: http://www.example.com/my-custom-plugin
Description: A brief description of the plugin.
Version: 1.0
Author: Neil Axinto
Author URI: https://axintoneil.com
License: GPL2
*/

include('includes/all_videos.php');
include('includes/add_video.php');
include('includes/edit_video.php');
include('includes/functions.php');

function my_custom_menu() {
    add_menu_page(
        'Video Manager', // Page title
        'Youtube Video Manager', // Menu title
        'manage_options', // Capability
        'video-manager', // Menu slug
        'my_custom_menu_page', // Callback function
        'dashicons-admin-generic', // Icon
    );

    add_submenu_page(
        'video-manager', // Parent slug
        'All Videos', // Page title
        'All Videos', // Menu title
        'manage_options', // Capability
        'all-videos-page', // Menu slug
        'all_videos_page' // Callback function
    );

    add_submenu_page(
        'video-manager', // Parent slug
        'Add Video', // Page title
        'Add Video', // Menu title
        'manage_options', // Capability
        'add-video-page', // Menu slug
        'add_video_page' // Callback function
    );

    add_submenu_page(
        'video-manager', // Parent slug
        'Edit Video', // Page title
        'Edit Video', // Menu title
        'manage_options', // Capability
        'edit-video-page', // Menu slug
        'edit_video_page' // Callback function
    );

}
add_action( 'admin_menu', 'my_custom_menu' );

function my_custom_menu_page() {
    ?>

    <h1>Youtube Video Manager (By Neil Axinto the great)</h1>


    <?php
}


function my_custom_table_install() {
    global $wpdb;

    $table_name_details = $wpdb->prefix . 'video_details';
    $table_name_settings = $wpdb->prefix . 'video_settings';

    $charset_collate = $wpdb->get_charset_collate();

    $sql_details = "CREATE TABLE $table_name_details (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title varchar(100) NOT NULL,
        owner varchar(100) DEFAULT '' NOT NULL, 
        video_id varchar(100) NOT NULL, 
        PRIMARY KEY  (id)
    ) $charset_collate;";

    $sql_settings = "CREATE TABLE $table_name_settings (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL UNIQUE,
        value varchar(100) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";


    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_details );
    dbDelta( $sql_settings );
}

register_activation_hook( __FILE__, 'my_custom_table_install' );




