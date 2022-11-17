<?php
if(!isset($_SESSION)){
    session_start();
}
require_once("model/base.php");
require_once("controller/producto.php");
class loginController extends productoController{
	private $model;
	private $user;
	private $password;
    private $message;
	
	
	function __construct(){
        $this->model=new Modelo();
    }
    static function index(){
    	$login 	=	new Modelo();
		require_once("view/login.php");
		
    }
    function waiting(){
    	$login 	=	new Modelo();
		require_once("view/login.php");
    }
	 function login(){
    	$login 	=	new Modelo();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'userName' => trim($_POST['userName']),        
                'paswordData' => trim($_POST['paswordData']),        
            ];
			$user=$login->mostrar("usuarios","user=\"".$data['userName']."\"and password=\"".$data['paswordData']."\"");
		if (!empty($user)) {
            foreach ($user as $key => $value) {
                foreach ($value as $va ){
                    $_SESSION["id"]=$va["user"];
                }
            }
            echo "<script>console.log('Console: " .$_SESSION["id"]. "' );</script>";
            productoController::index();
        } else {
            $message="usuario invalido";
            require_once("view/login.php");
        }
    } else {
        $data = [
            'nombre' => '',
            'email' => '',
            'telefono' => ''
        ];
		echo("<script>console.log('PHP: sin');</script>");
        //$this->vista('paginas/agregar', $datos);
    }
		//$dato=$producto->mostrar("productos","1");
		//require_once("view/login.php");
    }
}
?>