<?php
session_start();
class inicioController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    static function index(){
		require_once("view/index.php");
    }
    function inicio(){
    	require_once("view/index.php");	    	    	
    }
    function login(){
    	require_once("login.php");	    	    	
    }
    function nosotros(){
    	require_once("view/nosotros.php");	    	    	
    }
    function contactanos(){
    	require_once("view/contactanos.php");	    	    	
    }
}
?>