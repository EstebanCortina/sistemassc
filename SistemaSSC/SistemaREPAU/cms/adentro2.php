<?php
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }else{

 	
 	$usuario = $_SESSION['username'];

 	include("conexion.php");

 	$query = "SELECT Nombre FROM login WHERE NoCuenta = '$usuario' ";
 	$resultado = $conexion->query($query);
		 while ($row = $resultado->fetch_assoc()){
    		$Nombre = $row['Nombre'];
			}	

   $query2 = "SELECT ID FROM dependencia WHERE NoCuenta = '$usuario' ";
 	$resultado2 = $conexion->query($query2);
		 while ($row2 = $resultado2->fetch_assoc()){
    		$DepCargo = $row2['ID'];
			}	

	
	}					
?>