<?php
    include_once('config.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $completed = $_POST['completed'];
        $type = $_POST['type'];
        $leo = $_POST['leo'];
        $summary = $_POST['summary'];
        $details = $_POST['details'];
        $comments = $_POST['comments'];

        $sql = "UPDATE warrants SET `type` = '$type', `summary` = '$summary', `completed` = $completed, `leo` = '$leo', `details` = '$details', `comments` = '$comments' WHERE warrants.identifier = $id";
        $result = mysqli_query($conn, $sql);
    }
?>