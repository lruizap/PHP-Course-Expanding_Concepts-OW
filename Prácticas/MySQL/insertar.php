<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insertar.php</title>
</head>
<body>

<?php

    $miNombre = $_GET['nombre'];

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor,$usuario,$password) or die("Error de conexión");
    #Esto es para no poner el if

    mysqli_select_db($conexion,"usuarios");

    $insertar = "INSERT clientes(nombre) VALUES ('$miNombre')";

    mysqli_query($conexion,$insertar);

?>

</body>
</html>