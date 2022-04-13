<?php
    include_once('config.php'); //incluir o config.php para fazer a conexão

    $cop = "SELECT firstname, lastname, sex, height, badge, job_grade FROM users WHERE job='police' ORDER BY job_grade ASC";
    $grade = "SELECT label, grade FROM job_grades WHERE job_name='police' ORDER BY grade ASC";

    $resultCop = mysqli_query($conn,$cop);
    $resultGrade = mysqli_query($conn,$grade);
    $gradeCount = mysqli_num_rows($resultGrade);
?>