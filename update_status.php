<?php
    include './internal/check_permission.php';
	include './internal/files_name.php';
    
    $info = _GET_("info");
	$decoded_json = json_decode($info);
    file_put_contents(ambient_status, json_encode($decoded_json , JSON_PRETTY_PRINT));
    echo "Status update ".$info;
    echo ambient_status;
    echo json_encode($decoded_json , JSON_PRETTY_PRINT);
?>