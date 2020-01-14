<?php
    $grade=$_GET["grade"];
    $con=mysqli_connect("localhost","root","","test_db");
    $request=mysqli_query($con,"SELECT `grade_name`, `grade_index`, `grade_color` FROM `grades` where grade_id=$grade_id") or die(mysqli_error($con));
    $row=mysqli_fetch_assoc($request);
?>

<?php
    $request_student=mysqli_query($con,"SELECT students.`student_id`, `first_name`, `last_name`, `gender`,`grades`.`grade_name`,`grades`.`grade_color`, `address`,`students`.`grade` FROM `students` inner join `grades` on students.grade=`grades`.`id` and `students`.`grade`=$grade");
?>
<html>
    <head>
        <link rel="stylesheet" href="style-grade-info.css">
    </head>
    <body>
        <table class="table1">
            <tr>
                <th>Grade Name:</th>
                <td><?php echo $row["grade_name"];?></td>
            </tr>
            <tr>
                <th>Grade Index:</th>
                <td><?php echo $row["grade_index"]; ?></td>
            </tr>
            <tr>
                <th>Grade Colour:</th>
                <td style="background-color:<?php echo $row["grade_color"];?>; border:1px solid black;"></td>
            </tr> 
        </table>
        <h3 style="font-size:20px;"><u>Grade <span style="color:<?php echo $row["grade_color"];?>;"><?php echo $row["grade_name"];?></span> students Details</u></h3>
        
        <table border="1" style="margin-top:40px;"> 
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Grade</th>
                <th>Address</th>
            </tr>
            <?php
                while($row_student=mysqli_fetch_assoc($request_student))
                {
            ?>
            <tr>
                <td><?php echo $row_student["student_id"];?></td>
                <td><?php echo $row_student["first_name"];?></td>
                <td><?php echo $row_student["last_name"];?></td>
                <td><?php echo $row_student["gender"];?></td>
                <td><?php echo $row_student["grade_name"];?></td>
                <td><?php echo $row_student["address"];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>