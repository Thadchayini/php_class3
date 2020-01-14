<?php

    $delete_id=$_GET["id"];
    $con=mysqli_connect("localhost","root","","test_db");
    $result=mysqli_query($con,"DELETE FROM `students` WHERE id=$delete_id");

    header("location:student-table.php");
?>