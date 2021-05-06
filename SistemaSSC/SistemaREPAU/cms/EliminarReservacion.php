 <?php 
      include("conexion.php");

      $id2 = $_GET['id'];
      $query = "DELETE  FROM reservaciones WHERE ID ='$id2'";
      $resultado = $conexion->query($query);
      
      if($resultado){
    header("Location: reservas.php");
  }else{
    echo $id2;
  }
      
      ?>