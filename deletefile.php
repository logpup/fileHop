<?php
    $file = $_POST['filename'];
    $path = "uploads/".$file;
    echo $path;
    if (!unlink($path)) {
        echo "Error deleting file";
    }
    else {
        ("File has been deleted");
    }
    
