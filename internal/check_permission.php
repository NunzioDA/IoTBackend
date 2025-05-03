<?php
    include './internal/http_parameters_controller.php';
    $password = _GET_("password");
    if(hash('sha256', $password) != "")
      die("Access Denied");
?>