<?php

    /*print_r($_POST);*/

    $name=$_POST["grade_name"];
    $index=$_POST["grade_index"];
    $color=$_POST["grade_color"];

    $con=mysqli_connect("localhost","root","","test_db");
    
    mysqli_query($con,"INSERT INTO `grades`(`grade_name`, `grade_index`, `grade_color`) VALUES ('$grade_name','$grade_index','$grade_color')") or die(mysqli_error($con));
    header("location:grade-table.php");

?>
