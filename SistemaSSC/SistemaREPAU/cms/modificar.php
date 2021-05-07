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

	echo $id3;

	//QUERY DE UPDATE //
	$query = "UPDATE 
				dependencia 
			SET
				Nombre = '$Nombre',
				Dir = '$Dir',
				En = '$En',
				Ca = '$Ca',
				NoCuenta = '$NoCuenta',
				Des = '$Des'
			WHERE
				ID = '$id3'
			";
	$resultado = $conexion->query($query);
	
	if($resultado){
		header("Location: reservas.php");
	}
?>
