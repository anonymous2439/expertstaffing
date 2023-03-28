<?php

function all_videos_page() {
    global $wpdb;

    
    echo '<h1>All Videos</h1>';
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        delete_video_details($delete_id);
        echo '<div class="updated"><p>Video deleted successfully!</p></div>';
    }

    if (isset($_GET['defaultid'])) {
        $default_id = $_GET['defaultid'];
        set_default_video($default_id);
        echo '<div class="updated"><p>Video set as default successfully!</p></div>';
    }
    
    $videos = get_all_video_details();

    echo '<table>';
    echo '<tr><th>ID</th><th>Title</th><th>Owner</th><th>Video ID</th><th>Actions</th></tr>';

    foreach ($videos as $video) {
        echo '<tr>';
        echo '<td>' . stripslashes($video->id) . '</td>';
        echo '<td>' . stripslashes($video->title) . '</td>';
        echo '<td>' . stripslashes($video->owner) . '</td>';
        echo '<td>' . stripslashes($video->video_id) . '</td>';
        echo '<td><a href="?page=all-videos-page&defaultid=' . $video->id . '">Set Default</a> | <a href="?page=edit-video-page&id=' . $video->id . '">Edit</a> | <a href="?page=all-videos-page&delete_id=' . $video->id . '">Delete</a></td>';
        echo '</tr>';
    }

    echo '</table>';

    
}



?>