<?php
header('Content-Type: application/json');

// Path to the filters file on the server
$filtersFile = 'sms_filters.json';

// Check if the file exists
if (file_exists($filtersFile)) {
    // Read the file content
    $filtersContent = file_get_contents($filtersFile);
    echo $filtersContent;
} else {
    // Return an error if the file doesn't exist
    http_response_code(404);
    echo json_encode(array("error" => "Filters file not found"));
}
?>
