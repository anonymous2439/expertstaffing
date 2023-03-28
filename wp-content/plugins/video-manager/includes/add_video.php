<?php
function add_video_page() {
    ?>

    <h2>Add Video</h2>
    <form method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <br><br>
        <label for="owner">Owner:</label>
        <input type="text" id="owner" name="owner">
        <br><br>
        <label for="video_id">Video ID:</label>
        <input type="text" id="video_id" name="video_id">
        <br><br>
        <input type="submit" value="Add Video">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $owner = $_POST['owner'];
        $video_id = $_POST['video_id'];
        add_video_details($title, $owner, $video_id);
    }
}

?>