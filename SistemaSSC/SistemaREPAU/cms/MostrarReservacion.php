<?php 

$inc = include("HacerReservacionBD.php");
if ($inc) {
	$id2 = $_REQUEST['id'];
	$consulta = "SELECT * FROM dependencia WHERE ID ='$id2'";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while($row = $resultado->fetch_array()){
			$id = $row['ID'];
			$nombre = $row['Nombre'];
			$direccion = $row['Dir'];
			$en = $row['En'];
			$co = $row['Co'];
			$ca = $row['Ca'];
			$descripcion = $row['Des'];
			$imagen = $row['Imagen'];
			
			?>
			<style type="text/css">
				
			</style>

			<div align=center><h1 id="titulo" ><?php echo $nombre; ?></h1></div><br>

			<div align=center><img width="200" src="data:image/png;base64, <?php echo  base64_encode($row['Imagen']); ?>">
				<br></br>	

				<div align="center">
					<?php echo "Encargado: ".$en; ?>
				</div>
				
				<div>
					<?php echo "Correo: ".$co; ?>
				</div>
				<br>
				<div 
					align="center" style="width: 600px"><p><?php echo $descripcion; ?></p>
				</div>
				<br>
				<div align="center">
					<h1><?php echo $ca; ?>
				</div>

			
			<div
				align="center" ><h1><?php echo "Dirección: ".$direccion; ?></h1>
			</div>
			
			<form action="fecha.php" method="POST">
				<input type="text" name="Lugar" value="<?php echo $id2 ?>" style="width: 1px;height: 1px;">
				<div>
					<label for="">Fecha</label>
					<input id="fecha" type="date" name="fecha" class="form-control" style="width: 200px;height: 25px" />
					<label for="">Hora</label>
					<input id="hora" type="time" name="hora" class="form-control" style="width: 200px;height: 25px"/>
					<label for="">Tiempo</label>
					<select id="tiempo" name="tiempo" class="form-control" style="width: 200px;height: 40px">
						<option value="">--selecciona el tiempo--</option>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div>
					 
					<br><button type="submit" name="save_fecha" class="btn btn-primary">Reservar</button>
				</div>
			</form>

				

			<?php

		}
	}
}

?>