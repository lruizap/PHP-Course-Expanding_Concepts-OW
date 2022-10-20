<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor,$usuario,$password);
    // Este código es la conexión con el servidor

    if(!$conexion){
        echo "Conexión ha fallado";
    }else {
        $sql = "CREATE DATABASE usuarios";
        if(mysqli_query($conexion,$sql)){
            echo "BD creada";
        }else {
            echo "Error ".mysqli_error($conexion);
        }

        mysqli_select_db($conexion,"usuarios");

        $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";
        if(mysqli_query($conexion,$sql2)){
            echo "tabla creada";
        }
    }

?>

</body>
</html>