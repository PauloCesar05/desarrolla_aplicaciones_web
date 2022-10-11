<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "practicaweb";

    $conexion = new mysqli($server, $user, $password, $database);

    if($conexion->connect_error){
        die("Falló la conexión: " . $conexion->connect_error);
    }

?>
