<html>
    <head>
        <style>
            table 
            {
                padding:10px;
            }
            table tr,th,td
            {
                padding:10px;
            }
        </style>
    </head>
    <body>
        <table>
            <form action="student-create.php" method="post">
                <tr>
                    <th><label for="first_name">First Name</label></th>
                    <td><input type="text" name="first_name" id="first_name"></td>
                </tr>
                <tr>
                    <th><label for="last_name">Last Name</label></th>
                    <td><input type="text" name="last_name" id="last_name"></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender</label></th>
                    <td><label><input type="radio" name="gender" id="gender" value="Male">Male <input type="radio" name="gender" id="gender" value="Female">Female</label></td>
                </tr>

                <?php
                    $con=mysqli_connect("localhost","root","","test_db");
                    $result=mysqli_query($con,"SELECT * FROM `grades`");
                    
                ?>
                <tr>
                    <th><label for="grade">Grade</label></th>
                    <td><select name="grade" id="grade">
                    <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                    ?>
                        <option value="<?php echo $row["grade_id"]; ?>"><?php echo $row["grade_name"],$row["grade_index"]; ?></option>
                    <?php
                        }
                    ?>
                    </select></td>
                </tr>
                
                <tr>
                    <th><label for="address">Address</label></th>
                    <td><textarea name="address" id="address"></textarea></td>
                </tr>
                <tr>
                    <th></th>
                </tr>
                <tr>
                <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
                </tr>
            </form>
        </table>
    </body>
</html>