
        <?php
             $con=mysqli_connect("localhost","root","","test_db");

             $result=mysqli_query($con,"SELECT students.`student_id`, `first_name`, `last_name`, `gender`,`grades`.`grade_name`,`grades`.`grade_color`, `address`,`students`.`grade` FROM `students` inner join `grades` on students.grade=`grades`.`grade_id`");

             //$result=mysqli_query($con,"SELECT students.`id`, `first_name`, `last_name`, `gender`,`students-grade`.`grade_name`,`students-grade`.`grade_color`, `address`,`students`.`Grade`,`subject` FROM `students` inner join `students-grade` on students.Grade=`students-grade`.`id` inner join `students`.subject");

        ?>
<html>
    <head>
    
    </head>
    <body>
    <a href="student-create.php">Add New</a>
    <table border="1" style="width:75%; height:50px; margin-top:20px">
        <tr>
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Gender</th>
             <th>Grade</th>
             <th>Address</th>
             <th>Delete</th>
             <th>Edit</th>
             <th>Add Subject</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
          
        ?>
            <tr style="background-color:<?php echo $row['grade_color']; ?>">
                <td><?php echo $row["student_id"];?></td>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><a href="grade-view.php?grade=<?php echo $row['grade'];?>"> <?php echo $row["grade_name"];?></a></td>
                <td><?php echo $row["address"];?></td>
                <td><a href="student-delete.php?student_id=<?php echo $row['student_id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                <td><a href="student-edit.php?student_id=<?php echo $row['student_id'];?>">Edit</a></td>
                <td><a href="student-subject.php?student_id=<?php echo $row['student_id']; ?>">Add Subject</a></td>
                <td><a href="student-image.php?student_id=<?php echo $row['student_id']; ?>">Upload Image</a></td>

            </tr>
        <?php
        }
        ?>
    </table>
    </body>
</html>












