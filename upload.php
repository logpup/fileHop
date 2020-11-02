<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FileHop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        
        <?php
            if (isset($_SESSION['message']) && $_SESSION['message'])
            {
                printf('<b>%s</b>', $_SESSION['message']);
                unset($_SESSION['message']);
            }
        ?>
        <form enctype="multipart/form-data" method="POST" action="upload.php">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            <span>Upload a File: </span>
            <input name="user_file" type="file">
            <input name="uploadBtn" type="submit" value="Upload">
        </form>
        <!-- upload files [X] -->
        <!-- view files -->
        <!-- display files -->
    </body>
</html>