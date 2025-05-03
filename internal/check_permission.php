<?php
    include './internal/http_parameters_controller.php';
    $password = _GET_("password");
    if(hash('sha256', $password) != "737f55ca583503b89884f58bb55c38782228f2befdac3329fb59bc55e58e65e0")
      die("Access Denied");
?>