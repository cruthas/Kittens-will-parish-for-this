<?php
    $files = glob("*.tar.gz");
    foreach($files as $file) {
        if(is_file($file)
        && time() - filemtime($file) >= 1*24*60*60) { // 7 days
            unlink($file);
        }
    }
?>