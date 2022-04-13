<?php
    include_once('config.php');

    if(!empty($_GET['search'])){
        $data = $_GET['search']; //pega o que tem no param. search "?search=eae"
        $sql = "SELECT label, amount, category FROM fine_types WHERE label LIKE '%$data%' or amount LIKE '%$data%' or category LIKE '%$data%'";
    }
    else {
        $sql = "SELECT label, amount, category FROM fine_types";
    }


    $result = mysqli_query($conn,$sql);
?>