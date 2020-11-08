<?php
    $file = $_POST['filename'];
    $path = "uploads/".$file;
    if (!unlink($path)) {
        echo "Error deleting file";
    }
    else {
        echo "File deleted";
        header("Location: index.php?unlink=success");
    }
    
