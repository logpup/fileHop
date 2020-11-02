<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FileHop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div>
                <span>Upload a File:</span>
                <input type="file" name="uploadedFile" />
            </div>
            <input type="submit" name="uploadBtn" value="Upload" />
        </form>
        <?php
            if (isset($_SESSION['message']) && $_SESSION['message'])
            {
                printf('<b>%s</b>', $_SESSION['message']);
                unset($_SESSION['message']);
            }

            if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
            {
                if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
                {
                    // get details of the uploaded file
                    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
                    $fileName = $_FILES['uploadedFile']['name'];
                    $fileSize = $_FILES['uploadedFile']['size'];
                    $fileType = $_FILES['uploadedFile']['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));

                    // sanitize filename for special chars and spaces
                    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                    // restrict filetypes
                    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
                    if (in_array($fileExtension, $allowedfileExtensions))
                    {
                        // directory in which the uploaded file will be moved
                        $uploadFileDir = 'var/www/html/fileHop/uploads';
                        $dest_path = $uploadFileDir . $newFileName;
                        if(move_uploaded_file($fileTmpPath, $dest_path))
                        {
                        $message ='File is successfully uploaded.';
                        }
                        else
                        {
                        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                        }
                    }
                }
            }
        ?>
        <!-- upload files [X] -->
        <!-- view files -->
        <!-- display files -->
    </body>
</html>