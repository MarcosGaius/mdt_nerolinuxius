<?php
    include_once('config.php');

    $fine_id = $_POST['id'];

    $del_sql = "DELETE FROM billing WHERE billing.id = $fine_id";
    $result = mysqli_query($conn, $del_sql);
?>