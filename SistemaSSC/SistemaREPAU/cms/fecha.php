
	<?php  

     $con = mysqli_connect("localhost","root","","sistemarepau");

	if (isset($_POST['save_fecha'])){
	/**  */
	include("adentro4.php");
					
	$Lugar = $_POST['Lugar'];
	$Fecha = $_POST['fecha'];
	$Hora = $_POST['hora'];
	$Tiempo = $_POST['tiempo'];


	$query = "INSERT INTO reservaciones(Nombre,NoCuenta,Correo,Lugar,Fecha,Hora,Tiempo) VALUES ('$Nombre2','$usuario','$Correo2','$Lugar','$Fecha','$Hora','$Tiempo')";
	$query_run = mysqli_query($con,$query);

	if ($query_run) 
	{
		header("Location: reservas2.php");
	}
	else
	{
		echo "error en insert fecha";
	}
}

?>
