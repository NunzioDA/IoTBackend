<?php
	include './internal/check_permission.php';
	include './internal/files_name.php';
    
    // Load the JSON files
    $ambientStatusJson = file_get_contents(ambient_status);
    $cvParksJson = file_get_contents(cv_parks);

    // Decode the JSON into associative arrays
    $ambientStatus = json_decode($ambientStatusJson, true);
    $cvParks = json_decode($cvParksJson, true);

    // Check if both 'park' keys exist and are arrays
    if (isset($ambientStatus['park']) && isset($cvParks) && is_array($ambientStatus['park']) && is_array($cvParks)) {
        // Append ambientStatus['park'] entries to cvParks
        $parks = array_merge($cvParks, $ambientStatus['park']);
		$ambientStatus['park'] = $parks;
        // Output the resulting JSON
        echo json_encode($ambientStatus, JSON_PRETTY_PRINT);
    } else {
        echo "Error: one of the 'park' keys is missing or is not an array.";
    }
?>
