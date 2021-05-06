<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }else{
    	$usuario = $_SESSION['username'];
        include("conexion.php");
    	$query2 = "SELECT ID FROM dependencia WHERE NoCuenta = '$usuario' ";
 	$resultado2 = $conexion->query($query2);
		 while ($row2 = $resultado2->fetch_assoc()){
    		$DepCargo = $row2['ID'];
			}	
    	
$query = "SELECT Nombre FROM dependencia WHERE ID = '$DepCargo' ";
 	$resultado = $conexion->query($query);
		 while ($row = $resultado->fetch_assoc()){
    		$NombreDep = $row['Nombre'];
			}
			echo "<h1 class='title-ucol'>$NombreDep</h1>";   

	}
?>