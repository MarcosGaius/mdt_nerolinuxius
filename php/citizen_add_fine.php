<?php
    include_once('config.php');

    if(isset($_POST['id'])){
        date_default_timezone_set('America/Sao_Paulo');

        $fine_id = $_POST['fine-id'];
        $sender = $_POST['sender'];
        $cit_id = $_POST['id'];

        $sql = "SELECT label, amount FROM fine_types WHERE fine_types.id = $fine_id";
        $result = mysqli_query($conn, $sql);

        while($fines = mysqli_fetch_assoc($result)){
            $label = $fines['label'];
            $amount = $fines['amount'];
            $date = date("Y-m-d");

            $ins_sql = "INSERT INTO billing (`identifier`, `sender`, `target_type`, `target`, `label`, `amount`, `date`) VALUES ('Fine', '$sender', 'Multa', '$cit_id', '$label', '$amount', '$date')";
            $result = mysqli_query($conn, $ins_sql);
        }
    }
?>