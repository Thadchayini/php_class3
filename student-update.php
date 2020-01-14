<?php

/*$edit_id=$_GET["id"];*/

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$grade=$_POST["grade"];
$address=$_POST["address"];
$subject=$_POST["subject"];

$id=$_POST["id"];

//print_r($subject);

$subject_string=implode(",",$subject);  //To change the subject array as String

$con=mysqli_connect("localhost","root","","test_db");

mysqli_query($con, "UPDATE `students` SET `first_name`='$fname',`last_name`='$lname',`gender`='$gender',`Grade`='$grade',`subject`='$subject_string',`address`='$address' WHERE id=$id") or die(mysqli_error($con));

header("location:student-table.php");
?>