


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FileHop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <p>Good Morning</p>
            <form name="form" method="post" action="upload.php" enctype="multipart/form-data" >
                <input type="file" name="my_file" /><br /><br />
                <input type="submit" name="submit" value="Upload"/>
            </form>
            <?php
                if (($_FILES['my_file']['name']!="")){
                    
                    // Where the file is going to be stored
                    $target_dir = "upload/";
                    $file = $_FILES['my_file']['name'];
                    $path = pathinfo($file);
                    $filename = $path['filename'];
                    $ext = $path['extension'];
                    $temp_name = $_FILES['my_file']['tmp_name'];
                    $path_filename_ext = $target_dir.$filename.".".$ext;
                    
                    // Check if file already exists
                    if (file_exists($path_filename_ext)) {
                        echo "Sorry, file already exists.";
                    }else{
                        move_uploaded_file($temp_name,$path_filename_ext);
                        echo "Congratulations! File Uploaded Successfully.";
                    }
                }
            ?>
    </body>
</html>