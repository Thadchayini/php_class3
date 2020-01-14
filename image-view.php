 <?php

    $con=mysqli_connect("localhost","root","","test_db");

    $result=mysqli_query($con,"SELECT * FROM `images`");

        ?>
<html>
    <head>
    
    </head>
    <body>
    <a href="student-image.php">Add New</a>
    <table border="1" style="width:75%; height:50px; margin-top:20px">
        <tr>
             <th>ID</th>
             <th>Image Description</th>
             <th>Image</th>
             
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
          
        ?>
            <tr>
                <td><?php echo $row["image_id"];?></td>
                <td><?php echo $row["image_description"];?></td>                
                <td><?php header("Content-type: image_path/jpg");  echo $row["image_path"];?></td>
                <td><a href="image-delete.php?image_id=<?php echo $row['image_id'];?>" onclick="return confirm('Do You Want to Delete?')">Delete</a></td>
                <td><a href="image-edit.php?image_id=<?php echo $row['image_id'];?>">Edit</a></td>
                
            </tr>
        <?php
        }
        ?>
    </table>
    </body>
</html>