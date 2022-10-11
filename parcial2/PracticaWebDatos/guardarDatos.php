<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $domicilio = $_POST["domicilio"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    var_dump($sexo);

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, domicilio, fecha_nacimiento)".
    "VALUES ('".$nombre."', ".$edad.", ".$sexo.", ".$domicilio.", '".$fecha_nacimiento."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro Guardado con Éxito <a href='consultarDatos.php'> Regresar </a>";

    }else{
        echo "Error: " .$sql. "<br>" .$conexion->error. "<br><br><a href='consultarDatos.php'> Regresar </a>"; 
    }

    $conexion->close();
?>