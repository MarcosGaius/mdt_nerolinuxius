<?php
    include_once('config.php');

    $identifier = $_POST['id'];

    $del_sql = "DELETE FROM warrants WHERE warrants.identifier = $identifier";
    $result = mysqli_query($conn, $del_sql);
?>