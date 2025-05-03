<?php
    include './internal/check_permission.php';
	include './internal/files_name.php';
    
    $receivedTimestamp = strtotime(_GET_("timestamp"));

    // Read the file content
    $jsonContent = file_get_contents(command_queue);
    $data = json_decode($jsonContent, true);

    // Filter entries with timestamp greater than the received timestamp
    $filteredData = array_filter($data, function($entry) use ($receivedTimestamp) {
        return isset($entry['timestamp']) && strtotime($entry['timestamp']) > $receivedTimestamp;
    });

    // Overwrite the file with the filtered data
    $json_content = json_encode(array_values($filteredData));
    file_put_contents(command_queue, $json_content, JSON_PRETTY_PRINT);

    // Output the updated content
    header('Content-Type: application/json');
    echo $json_content;
?>