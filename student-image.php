<!DOCTYPE html>
<html lang="en">
<body>
    <form action="image-upload.php" method="post">
    <table>
    <tr>
    <td>Image Description</td>
    <td><label for = "image_description"><input type="text" name="image_description" id ="image_description"/></label></td>
    </tr>
    <tr>
    <td>Select image to upload:</td>
    <td><input type="file" name="image_path" enctype = "multipart/form-data"/></td>
    </tr>
    <tr>
    <td><input type="submit" name="submit" value = "upload"/></td>
    </tr>
    </table>
    </form>
</body>
</html