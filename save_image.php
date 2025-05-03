<?php
	include './internal/check_permission.php';
    include './internal/files_name.php';
    include './internal/image_management.php';
	
    $base64image = _POST_("image");
    saveBase64Image($base64image);
    file_put_contents(pending_image_request, "False");
?>