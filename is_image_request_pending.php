<?php
	include './internal/files_name.php';
    include './internal/check_permission.php';
	$file = fopen(pending_image_request, "r");

	if ($file) {
    	while (($riga = fgets($file)) !== false) {
       	 echo $riga;
    	}      

        fclose($file);
    } else {
        echo "False";
    }
?>