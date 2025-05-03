<?php
	include './internal/error_codes.php';
	include './internal/image_management.php';
    include './internal/files_name.php';
	include './internal/check_permission.php';
    
	if(imageExists()){    
 		$file_url = getImagePath();
		$image = imagecreatefromstring(file_get_contents($file_url));
		header("Access-Control-Allow-Origin: *");
		header('Content-type: image/png');

		imagepng($image);
    }
    else{
    	die("No image available");
    }
?>