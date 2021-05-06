<?php
session_start();
$con = mysqli_connect("localhost","root","","sistemarepau");


if (isset($_POST['eliminar_id_reservacion_btn'])) 
{
	$id = $_POST['eliminar_id_reservacion'];

	$query = "DELETE FROM reservaciones WHERE ID='$id' ";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['status'] = "Datos Eliminado De La Tabla Reservaciones";
		header("Location: EliminarReservacion.php");
	}
	else
	{
		$_SESSION['status'] = "Datos No Fueron Eliminados De La Tabla Reservaciones";
		header("Location: EliminarReservacion.php");
	}
}