<?php
    include_once('config.php'); //incluir o config.php para fazer a conexão

    $citizens = "SELECT id FROM users";
    $vehicles = "SELECT plate FROM owned_vehicles";

    if ($result_cit=mysqli_query($conn,$citizens) and $result_veh=mysqli_query($conn,$vehicles)){
        $citizenCount = mysqli_num_rows($result_cit);
        $vehicleCount = mysqli_num_rows($result_veh);
    }
?>