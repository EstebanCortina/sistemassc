<?php 
	include("conexion.php");

	
	$id3 = $_POST['id3'];
	$Nombre = $_POST['Nombre'];
	$Dir = $_POST['Dir'];
	$En = $_POST['En'];
	$NoCuenta = $_POST['NoCuenta'];
	$Ca = $_POST['Ca'];
	$Des = $_POST['Des'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


	//QUERY DE UPDATE //
	$query = "UPDATE dependencia SET(Nombre,Dir,Des,Imagen) VALUES('$Nombre','$Dir','$Des','$Imagen') WHERE ID ='$id3'";
	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: reservas.php");
	}
?>
