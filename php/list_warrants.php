<?php
    include_once('config.php'); //incluir o config.php para fazer a conexão

    if(!empty($_GET['search'])){
        $data = $_GET['search']; //pega o que tem no param. search "?search=eae"
        $sql = "SELECT * FROM users INNER JOIN warrants ON users.id = warrants.disadvantaged WHERE `type` LIKE '%$data%' or `identifier` LIKE '%$data%' or `disadvantaged` LIKE '%$data%' or `firstname` LIKE '%$data%' or `lastname` LIKE '%$data%'";
    }
    else {
        $sql = "SELECT * FROM users INNER JOIN warrants ON users.id = warrants.disadvantaged";
    }

    $result = mysqli_query($conn,$sql);
?>