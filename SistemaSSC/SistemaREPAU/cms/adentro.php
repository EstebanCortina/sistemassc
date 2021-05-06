<?php 
 	session_start();
 	$usuario = $_SESSION['username'];

 	include("conexion.php");

 	$query = "SELECT Nombre FROM login WHERE NoCuenta = '$usuario' ";
 	$resultado = $conexion->query($query);
		 while ($row = $resultado->fetch_assoc()){
    		$Nombre = $row['Nombre'];
			}	

    echo "<li> $Nombre </li>";
						
?>