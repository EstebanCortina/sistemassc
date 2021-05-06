<?php 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
        $usuario = $_SESSION['username'];
    }else{
    	$usuario = $_SESSION['username'];
    }

?>