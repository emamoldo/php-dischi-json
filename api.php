<?php  
    $disk_container = file_get_contents('disks.json');

    $disk_container = json_decode($disk_container, true);

    foreach ($disk_container as $key => $disc) {
        $disk_container[$key]['ISBN'] = 'BGFD' . rand();
    }

    header('Content-type: application/json');
    
    echo json_encode($disk_container);
?>