<?php
    include 'conexion.php';

    $id = $_POST["Identificador"];
    $nombre = $_POST["Nombre"];
    $detalle = $_POST["Detalle"];

    
    $sql="INSERT INTO categoria (Identificador, Nombre, Detalle)
          values('$id', '$nombre', '$detalle')";


    $res = 0;
    if($conexion->query($sql) === TRUE) {
      echo('Aceptado');
    }
    else{
      echo('Rechazado');
    }
    mysqli_close($conexion);  // Cierra la conexion