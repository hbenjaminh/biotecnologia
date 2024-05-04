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
    echo("todo bien");
  }
?>
