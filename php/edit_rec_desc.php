<?php
    include_once('config.php');

    if(isset($_POST['id'])){
        $citizen_id = $_POST['id'];
        $rec_desc = $_POST['rec-desc'];

        $sqlHasRecord = "SELECT id FROM users_record WHERE users_record.citizen_id = $citizen_id";
        $resultHasRecord = mysqli_query($conn, $sqlHasRecord);
        $hasRecord = mysqli_num_rows($resultHasRecord);

        if($hasRecord != 0){
            $desc_update = "UPDATE users_record SET rec_desc = '$rec_desc' WHERE users_record.citizen_id = $citizen_id";
            $result = mysqli_query($conn, $desc_update);
        }
        else{
            $desc_ins = "INSERT INTO users_record (rec_desc, citizen_id) VALUES ('$rec_desc', $citizen_id)";
            $result = mysqli_query($conn, $desc_ins);
        }
    }
?>