<?php
    $file = $_GET['filename'];
    $path = $file;
    if (!unlink($path)) {
        echo "You have an error";
    } else {
        header("Location: index.php?deletesuccess");
    }
    
