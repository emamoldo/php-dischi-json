<?php
$disk_container = file_get_contents('disks.json');

$disk_container = json_decode($disk_container, true);

header('Content-type: application/json');

echo json_encode($disk_container);
?>