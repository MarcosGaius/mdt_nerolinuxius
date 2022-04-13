<?php
    include_once('config.php');

    if(isset($_POST['disadvantaged'])){
        $dis_id = $_POST['disadvantaged'];
        $type = $_POST['type'];
        $leo = $_POST['involved-leo'];
        $summary = $_POST['summary'];
        $details = $_POST['details'];
        $comments = $_POST['comment'];
        
        $sql = "INSERT INTO warrants (`type`, `summary`, `disadvantaged`, `leo`, `details`, `comments`) VALUES ('$type', '$summary', $dis_id, '$leo', '$details', '$comments')";
        $result = mysqli_query($conn, $sql);
    }

?>