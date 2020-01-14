<?php
$image_path=$_POST["image_path"];
$image_description = $_POST["image_description"];

// $image = $_FILES['image_path']['image_description'];
// $img = "images/";

$con=mysqli_connect("localhost","root","","test_db");
$result=mysqli_query($con,"INSERT INTO `images`(`image_path`,`image_description`) VALUES ('$image_path','$image_description')") or die(mysqli_error($con));

    
$insert = $con;

if($insert){
    echo "File uploaded successfully.";
}else{
echo "Please select an image file to upload.";
}

header("location:image-view.php");

?>