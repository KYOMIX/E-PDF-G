<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

$filename = 'blocklist_data.json';

if (file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
    echo json_encode(['success' => true, 'data' => $data ?: []]);
} else {
    // Create empty file if it doesn't exist
    file_put_contents($filename, json_encode([]));
    echo json_encode(['success' => true, 'data' => []]);
}
?>