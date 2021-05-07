<?php
/** Tu if lo que debe se hacer es:
 * Si NO hay una sesión iníciala
 * Si si la hay, entonces hacemos lo que sigue
 * por eso el else no es necesario, porque de una manera u otra siempre habrá sesión, y el problema era que cuando NO habia sesión
 * y la generabas con session_start() ahi se rompía la sentencia, y no continuaba haciendo lo que estaba en el else
 */
if (!isset($_SESSION)) {
    session_start();
    $usuario = $_SESSION['username'];
} 
    $conexion = new mysqli("localhost", "root", "", "sistemarepau");
    $query2 = "SELECT Nombre FROM login WHERE NoCuenta = '$usuario'";
    $resultado2 = $conexion->query($query2);
    while ($row2 = $resultado2->fetch_assoc()) {
        $Nombre2 = $row2['Nombre'];
    }



    $query3 = "SELECT Correo FROM login WHERE NoCuenta = '$usuario'";
    $resultado3 = $conexion->query($query3);
    while ($row3 = $resultado3->fetch_assoc()) {
        $Correo2 = $row3['Correo'];
    }

