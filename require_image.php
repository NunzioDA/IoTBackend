<?php
    include './internal/check_permission.php';
	include './internal/files_name.php';
    
    file_put_contents(pending_image_request, "True");
?>