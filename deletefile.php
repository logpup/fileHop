<?php
    $file = $_POST['filename'];
    $path = "uploads/".$file;
    if (!unlink($path)) {
        echo "Error deleting file";
    }
    else if (unlink($path)) {
        header("Location: index.php");
    }
    header("Location: index.php");
    
