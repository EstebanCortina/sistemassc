<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        echo "entro al isset";
    }else{
    $conexion = new mysqli("localhost","root","","sistemarepau");
    
    $usuario = $_SESSION['username'];

    $query2 = "SELECT Nombre FROM login WHERE NoCuenta = '$usuario'";
    $resultado2 = $conexion->query($query2);
         while ($row2 = $resultado2->fetch_assoc()){
            $Nombre2 = $row2['Nombre'];
            }   

        

   $query3 = "SELECT Correo FROM login WHERE NoCuenta = '$usuario'";
    $resultado3 = $conexion->query($query3);
         while ($row3 = $resultado3->fetch_assoc()){
            $Correo2 = $row3['Correo'];
            }   
       
    }
?>