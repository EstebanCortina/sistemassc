<?php

$conexion = mysqli_connect('localhost','root','','sistemarepau');
	

	if($conexion){
		include("adentro2.php");
		$consulta = "SELECT * FROM reservaciones WHERE Lugar ='$DepCargo'";

		$datos = $conexion->query($consulta);
		if($datos->num_rows>0){
			$contador = 0;
		 
		 while ($fila = $datos->fetch_assoc()) {
		 	//variables para asignar los datos del base de datos
		 	$id = $fila['ID'];
		 	$nombre = $fila['Nombre'];
		 	$NoCuenta = $fila['NoCuenta'];
		 	$Correo = $fila['Correo'];
		 	$lugar = $fila['Lugar'];
		 	$fecha = $fila['Fecha'];
		 	$hora = $fila['Hora'];
		 	$tiempo = $fila['Tiempo'];
		 	$conexion2 = mysqli_connect('localhost','root','','sistemarepau');


		 	$consulta2 = "SELECT * FROM dependencia WHERE ID ='$lugar'"; 
		 	$datos2 = $conexion2->query($consulta2);

		 	while ($row = $datos2->fetch_assoc()) {
    			$lugar2 = $row['Nombre'];
				}	

?>

	     
	
		 	<tr>

		 	<td><?= $id ?></td>
		 	<td><?= $nombre ?></td>
		 	<td><?= $NoCuenta ?></td>
		 	<td><?= $Correo ?></td>
		 	<td><?= $lugar2 ?></td>
		 	<td><?= $fecha ?></td>
		 	<td><?= $hora ?></td>
		 	<td><?= $tiempo ?></td>
		 	<td><a type="submit" href="EliminarReservacion.php?id=<?php echo $fila['ID']; ?>">ELIMINAR</a></td>
		 	</tr>

<?php


		 }
		}
	}

?>