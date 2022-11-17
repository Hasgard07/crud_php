<?php
require_once("config.php");
require_once("controller/login.php");
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if(method_exists('loginController',$metodo)):
        loginController::{$metodo}();
    endif;
else:
    loginController::index();
endif;
?>