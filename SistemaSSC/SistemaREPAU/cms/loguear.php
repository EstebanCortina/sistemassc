<?php 
	require 'conexion.php';
	session_start();

	$NoCuenta = $_POST['NoCuenta'];
	$Password = $_POST['Password'];
 
 	$query = "SELECT COUNT(*) AS contar FROM login WHERE NoCuenta = '$NoCuenta' AND Password = '$Password'";
 	$consulta = mysqli_query($conexion,$query);	
 	$array = mysqli_fetch_array($consulta);

 	$query2= "SELECT Escuela FROM login WHERE NoCuenta = '$NoCuenta'";
 	$resultado2 = $conexion->query($query2);
		 while ($row2 = $resultado2->fetch_assoc()){
    		$Escuela = $row2['Escuela'];
			}		

 	if ($array['contar']>0) {
 		$_SESSION['username'] = $NoCuenta;
 		//buscar si es alumno o encargad
 		if($Escuela == 'Encargado'){
 			header("location: reservas.php");
 			}else{
 				header("location: index2.php");
 			}
 	}else{
 		//cambiarlo por el index pero que se imprima ' datos incorrectos'
 		echo 'datos incorrectos';
 	}
?>