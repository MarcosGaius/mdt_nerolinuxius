<?php
    include_once('config.php');
   
    if(isset($_POST['id'])){

        $citizen_id = $_POST['id'];
        $link = $_POST['photo-link'];

        $sqlhasRecord = "SELECT id FROM users_record WHERE users_record.citizen_id = $citizen_id";
        $hasRecord = mysqli_query($conn, $sqlhasRecord);
        $recordRow = mysqli_num_rows($hasRecord);

        if($recordRow != 0){
            $img_update = "UPDATE users_record SET img_link = '$link' WHERE users_record.citizen_id = $citizen_id";
            $result = mysqli_query($conn, $img_update);
        }
        else{
            $ins_sql = "INSERT INTO users_record (img_link, citizen_id) VALUES ('$link', $citizen_id)";
            $result = mysqli_query($conn, $ins_sql);
        }    
    }
?>