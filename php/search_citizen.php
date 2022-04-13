<?php
    include_once('config.php');

    if(!empty($_GET['id'])){
        $data = $_GET['id'];
        $sql = "SELECT * FROM users WHERE users.id LIKE '%$data%'";
        $fines = "SELECT * FROM fine_types";
    }
    else {
        echo "Erro ao tentar pesquisar a ficha!";
    }

    $result = mysqli_query($conn,$sql);
    $resultFines = mysqli_query($conn,$fines);
?>