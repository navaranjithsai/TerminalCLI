<?php
// server.php

// Get the input data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Save the input data as a file for debugging
file_put_contents('input.txt', $input);
// create a file named time.txt with the current timestamp with adding data into it
// file_put_contents('time.txt', date('Y-m-d H:i:s') . "\n" . $input);

// Check if the data is not null
if ($data === null) {
    // Send an error response
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Invalid input data']);
    exit;
}

// Open the links.json file
$file = file_get_contents('links.json');
$links = json_decode($file, true);

// Add the new link
$links['links'][$data['name']] = $data['url'];

// Save the links.json file
if (file_put_contents('links.json', json_encode($links)) === false) {
    // Send an error response
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Failed to save the links.json file']);
    exit;
}

// Send a success response
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>