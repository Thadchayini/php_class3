<html>
    <head>
        <style>
            table tr,th,td 
            {
                padding:20px;
            }
        </style>
    </head>
    <body>
        <table>
            <form action="grade-create.php" method="post">
                <tr>
                    <th><label for="grade_name">Grade Name</label></th>
                    <td><input type="text" name="grade_name" id="grade_name"></td>
                </tr>
                <tr>
                    <th><label for="grade_index">Grade Index</label></th>
                    <td><input type="text" name="grade_index" id="grade_index"></td>
                </tr>
                <tr>
                    <th><label for="grade_color">Grade Colour</label></th>
                    <td><input type="color" name="grade_color" id="grade_color"></td>
                </tr>
                <tr>
                    <th><input type="submit" value="Submit"> <input type="reset" value="Clear"></th>
                </tr>
            </form>
        </table>
    </body>
</html>