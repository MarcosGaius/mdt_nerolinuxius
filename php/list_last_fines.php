<?php
    include_once('config.php');

    $sql = "SELECT * FROM billing INNER JOIN users ON billing.target = users.id ORDER BY billing.id DESC";

    $result = mysqli_query($conn,$sql);
?>