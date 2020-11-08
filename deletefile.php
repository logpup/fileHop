<?php
    $file = $_POST['filename'];
    $path = "uploads/".$file;
    if (!unlink($path)) {
        echo "Error deleting file";
    }
    else {
        header("Location: index.php?unlink=supersuccess");
    }
    // header("Location: index.php?unlink=success");
    
