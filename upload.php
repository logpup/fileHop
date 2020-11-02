<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FileHop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST" action="upload.php">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            <input name="userfile" type="file">
            <input type="submit" value="Upload">
        </form>
        <?php
            $uploadir = 'var/www/html/fileHop/uploads/'
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        ?>
        <!-- upload files [X] -->
        <!-- view files -->
        <!-- display files -->
    </body>
</html>