<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualiza.php</title>
</head>
<body>

<?php

    $miNombre = $_GET["nombre"];

    $modificar = $_GET["seleccionar"];

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $conexion = mysqli_connect($servidor,$usuario,$password) or die("Error de conexión");

    mysqli_select_db($conexion,"usuarios");

    $update = "UPDATE clientes SET nombre = '$miNombre' WHERE nombre = '$modificar'";

    mysqli_query($conexion, $update);

?>

</body>
</html>