<?php
    include_once('config.php');

    $user = "SELECT id, firstname, lastname FROM users LEFT JOIN owned_vehicles ON users.id = owned_vehicles.owner";

    if(!empty($_GET['search'])){
        $data = $_GET['search']; //pega o que tem no param. search "?search=eae"
        $sql = "SELECT * FROM owned_vehicles INNER JOIN users ON users.id = owned_vehicles.owner WHERE `owner` LIKE '%$data%' or `plate` LIKE '%$data%' or `vehicle` LIKE '%$data%'  or `firstname` LIKE '%$data%' or `lastname` LIKE '%$data%'";
    }
    else {
        $sql = "SELECT * FROM owned_vehicles INNER JOIN users ON users.id = owned_vehicles.owner";
    }

    $result = mysqli_query($conn,$sql);
?>