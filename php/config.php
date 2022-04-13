<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_nerolinuxius';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conn->connect_errno){
    //     echo "Erro na conexão com o banco de dados.";
    // }
    // else{
    //     echo "Conexão bem sucecida.";
    // }
?>