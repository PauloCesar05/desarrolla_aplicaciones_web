<?php

    include 'conexion.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM usuarios WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
        echo "Se elimino el registro con ID " .$id. "<br>";
        echo "<a href='consultarDatos.php'>Registrar</a>";
    }else{
        echo "Ocurrio un error: " . $conexion->error . "<br>";
        echo "<a href='consularDatos.php'>Registrar</a>";
    }
?>