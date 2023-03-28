<?php
function edit_video_page() {
    global $wpdb;

    if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {
        $id = intval( $_GET['id'] );

        $table_name = $wpdb->prefix . 'video_details';
        $video = $wpdb->get_row( "SELECT * FROM $table_name WHERE id = $id" );

        if ( $video ) {
            if ( isset( $_POST['update_video'] ) ) {
                $title = sanitize_text_field( $_POST['title'] );
                $owner = sanitize_text_field( $_POST['owner'] );
                $video_id = sanitize_text_field( $_POST['video_id'] );
                update_video_details($id, $title, $owner, $video_id);
                echo '<p>Video updated successfully.</p>';
                return;
            }

            ?>

            <h2>Edit Video</h2>
            <form method="post">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo esc_attr( $video->title ); ?>">
                <br><br>
                <label for="owner">Owner:</label>
                <input type="text" id="owner" name="owner" value="<?php echo esc_attr( $video->owner ); ?>">
                <br><br>
                <label for="video_id">Video ID:</label>
                <input type="text" id="video_id" name="video_id" value="<?php echo esc_attr( $video->video_id ); ?>">
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="update_video" value="Update Video">
            </form>

            <?php
        } else {
            echo '<p>Invalid video ID.</p>';
        }
    } else {
        echo '<p>No video ID specified.</p>';
    }
}

?>