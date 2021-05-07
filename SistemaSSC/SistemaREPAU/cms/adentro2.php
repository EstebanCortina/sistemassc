<?php

if (!isset($_SESSION)) {
	session_start();
} else {
	$usuario = $_SESSION['username'];

	include("conexion.php");

	$query = "SELECT Nombre FROM login WHERE NoCuenta = '$usuario' ";
	$resultado = $conexion->query($query);
	while ($row = $resultado->fetch_assoc()) {
		$Nombre = $row['Nombre'];
	}

	// $query2 = "SELECT ID FROM dependencia WHERE NoCuenta = '$usuario' ";
	// $resultado2 = $conexion->query($query2);
	// while ($row2 = $resultado2->fetch_assoc()) {
	// 		$DepCargo = $row2['ID'];
	// }

	/**
	 * Comente lo de arriba porque lo que hacía tu funcion es que si $resultado2 tenía más de un registro pues se hacía el ciclo...
	 * pero cada vuelta del ciclo, sobreescribia el valor de la variable $DepCargo y solo se quedaba con el valor de la ultima vuelta del while
	 * Por esto cambie la variable a un array y así todos los resultados se van almacenando, para posteriormente realizar las consultas y obtener
	 * todos los registros que coincidan y no solo los de la última coincidencia
	 */
	$DepCargo = array();
	$query2 = "SELECT ID FROM dependencia WHERE NoCuenta = '$usuario' ";
	$resultado2 = $conexion->query($query2);
	while ($row2 = $resultado2->fetch_assoc()) {
		array_push($DepCargo, $row2['ID']);
	}
	
}
