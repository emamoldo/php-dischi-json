<?php 
    $disk_container = file_get_contents('disks.json');

    $diskArray = json_decode($disk_container, true);
    echo $diskArray;
?>