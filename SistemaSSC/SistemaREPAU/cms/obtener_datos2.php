<!-- conexion a la base de datos para mostra las dependencias en una tabla -->
<?php

$conexion = mysqli_connect('localhost','root','','sistemarepau');

if($conexion){
	$consulta = 'SELECT * FROM dependencia';
	$datos = $conexion->query($consulta);
	if($datos->num_rows>0){
		 $contador = 0;
		 
		 while ($fila = $datos->fetch_assoc()) {
		 	//variables para asignar los datos del base de datos
		 	$id = $fila['ID'];
		 	$dependencia = $fila['Nombre'];
		 	$ubicacion = $fila['Dir'];
		 	$descripcion = $fila['Des'];
		 	$Capacidad = $fila['Ca'];
?>
				<!-- imprimir los datos del base de datos a la tabla  -->
			<tr style="width: 800px">
				<td style="width: 25px"><?= $id ?></td>

				<td style="width: 150px"><?= $dependencia ?><br><img width="200" src="data:image/png;base64, <?php echo  base64_encode($fila['Imagen']); ?>"> </td>

				<td style="width: 50px"><?= $ubicacion ?></td>
				
				<td style="width: 175px"><?= $descripcion ?></td>

				<td style="width: 175px"><?= $Capacidad ?></td>

				<!-- CODIGO DEL BOTON -->
				
				<td>
					<a href="hacerreservacion.php?id=<?php echo $fila['ID']; ?>">IR</a>
				</td>
				

			</tr>
<?php
		 }
	}
}
?>
