<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['data'])) {
    $filename = 'wakeup_data.json';
    
    // Create backup before saving
    if (file_exists($filename)) {
        copy($filename, $filename . '.backup');
    }
    
    // Save data to file
    if (file_put_contents($filename, json_encode($data['data'], JSON_PRETTY_PRINT))) {
        echo json_encode(['success' => true, 'message' => 'Data saved successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to save data']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No data provided']);
}
?>