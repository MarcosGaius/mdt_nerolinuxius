<?php
    include_once('config.php'); //incluir o config.php para fazer a conexão

    $cop = "SELECT firstname, lastname, badge, job_grade FROM users WHERE working=1 and job='police'";
    $grade = "SELECT label, grade FROM job_grades WHERE job_name='police'";

    $resultCop = mysqli_query($conn,$cop);
    $resultGrade = mysqli_query($conn,$grade);
    $gradeCount = mysqli_num_rows($resultGrade);
?>