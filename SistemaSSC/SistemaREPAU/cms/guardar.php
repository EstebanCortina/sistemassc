<?php 
	include("conexion.php");

	$Nombre = $_POST['Nombre'];
	$Dir = $_POST['Dir'];
	$Des = $_POST['Des'];
	$En = $_POST['En'];
	$Co = $_POST['Co'];
	$NoCuenta = $_POST['NoCuenta'];
	$Ca = $_POST['Ca'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

	$query = "INSERT INTO dependencia(Nombre,Dir,En,NoCuenta,Co,Ca,Des,Imagen) VALUES('$Nombre','$Dir','$En','$NoCuenta','$Co','$Ca','$Des','$Imagen')";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: index2.php");
	}else{
		echo "Error";
	}

?>