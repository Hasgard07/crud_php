<?php
require_once("config.php");
require_once("controller/producto.php");
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if(method_exists('productoController',$metodo)):
        productoController::{$metodo}();
    endif;
else:
    productoController::index();
endif;
?>