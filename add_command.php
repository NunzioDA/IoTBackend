<?php
    include './internal/check_permission.php';
	include './internal/files_name.php';
    
    $command = _GET_("command");
    $timestamp = _GET_("timestamp");

    $newCommand = [
        'command' => $command,
        'timestamp' => $timestamp,
    ];

    if (file_exists(command_queue)) {
        $jsonData = file_get_contents(command_queue);
        $data = json_decode($jsonData, true);

        if (!is_array($data)) {
            $data = [];
        }
    } else {
        $data = [];
    }

    $data[] = $newCommand;

    file_put_contents(command_queue, json_encode($data, JSON_PRETTY_PRINT));

?>