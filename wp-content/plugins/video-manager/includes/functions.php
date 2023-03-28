<?php
function add_video_details($title, $owner, $video_id) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_details';
    $wpdb->insert(
        $table_name,
        array(
            'title' => $title,
            'owner' => $owner,
            'video_id' => $video_id,
        ),
        array(
            '%s',
            '%s',
            '%s',
        )
    );
    return $wpdb->insert_id;
}

function get_video_details($id) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_details';
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id));
}

function get_all_video_details() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_details';
    return $wpdb->get_results("SELECT * FROM $table_name");
}

function update_video_details($id, $title, $owner, $video_id) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_details';
    return $wpdb->update(
        $table_name,
        array(
            'title' => $title,
            'owner' => $owner,
            'video_id' => $video_id,
        ),
        array('id' => $id),
        array(
            '%s',
            '%s',
            '%s',
        ),
        '%d'
    );
}


function delete_video_details($id) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_details';
    return $wpdb->delete(
        $table_name,
        array('id' => $id),
        array('%d')
    );
}

function set_default_video($default_id){
    global $wpdb;
    $table_name = $wpdb->prefix . 'video_settings';
    $setting_name = 'default_video';
    $wpdb->replace(
        $table_name,
        array(
            'name' => $setting_name,
            'value' => $default_id,
        ),
        array(
            '%s',
            '%s',
        )
    );
    return $wpdb->insert_id;
}

function get_default_video() {
    global $wpdb;

    $table_name_settings = $wpdb->prefix . 'video_settings';
    $table_name_details = $wpdb->prefix . 'video_details';
    $setting_name = 'default_video';

    $default_video_id = $wpdb->get_var(
        $wpdb->prepare("SELECT value FROM $table_name_settings WHERE name = %s", $setting_name)
    );

    if ($default_video_id) {
        $default_video = $wpdb->get_row(
            $wpdb->prepare("SELECT * FROM $table_name_details WHERE id = %d", $default_video_id)
        );
        return $default_video;
    } else {
        return null;
    }
}


?>