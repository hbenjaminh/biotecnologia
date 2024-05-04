<?php

  $serverName = "localhost";
  $userName = "Gael";
  $password = "Gael123";
  $database = "biotechDb";

  $connection = new mysqli(
    $serverName,
    $userName,
    $password,
    $database
  );

  if($connection->connect_error){
    echo("Conexion fallida: " . $connect_error);
  }else{
    echo("Tabla grupo contenido:");
    $sql = "SELECT * FROM Grupo";
    $result = $connection->query($sql);
    
    
    
    echo("\n");

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo $row['especialidad'];
        echo ("\n");
        echo $row['grupo'];
        echo ("\n");
      }
    } else {
      echo "No se encontraron registros";
    }
  }
?>
