<?php
# layout.php
require_once("config.php");
require_once("controller/inicio.php");
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if(method_exists('inicioController',$metodo)):
        inicioController::{$metodo}();
    endif;
else:
    inicioController::index();
endif;
?>
  