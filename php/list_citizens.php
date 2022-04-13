<?php
    include_once('config.php');

    if(!empty($_GET['search'])){
        $data = $_GET['search']; //pega o que tem no param. search "?search=eae"
        $sql = "SELECT id, firstname, lastname, sex FROM users WHERE id LIKE '%$data%' or firstname LIKE '%$data%' or lastname LIKE '%$data%' or sex LIKE '%$data%'";
    }
    else {
        $sql = "SELECT id, firstname, lastname, sex FROM users";
    }

    $result = mysqli_query($conn,$sql);
?>