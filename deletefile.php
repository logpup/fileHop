<?php
    $file = $_POST['filename'];
    $path = "uploads/".$file;
    if (!unlink($path)) {
        echo "Error deleting file";
    }
    else {
        ("File has been deleted");
    }
    
