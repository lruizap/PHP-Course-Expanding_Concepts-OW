<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comprobar</title>
</head>
<body>

<?php

    $miNombre = $_GET['nombre'];

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor,$usuario,$password) or die("Error de conexión");

    mysqli_select_db($conexion,"usuarios");

    $consultar = "SELECT nombre FROM clientes";

    $registros = mysqli_query($conexion, $consultar);

    while($registro = mysqli_fetch_row($registros)){
        echo "Nombre: ".$registro[0]."</br>";
        if($registro[0] == $miNombre){
            $encontrado = true;
        }else{
            $encontrado = false;
        };
    }

    if($encontrado) {
        echo $miNombre." Ha sido encontrado en la base de datos";
    }
    else {
        echo $miNombre." NO ha sido encontrado en la base de datos";
    }
?>

</body>
</html>