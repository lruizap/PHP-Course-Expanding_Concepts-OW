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

    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Luisja";
    $_SESSION['edad'] = "22";

    echo "Identificador de la sesión: ".session_id();
    echo "</br>";
    echo "Nombre de la sesión: ".session_name();
    echo "</br>";
    echo "Nombre: ".$_SESSION['nombre'];
    echo "</br>";
    echo "Edad: ".$_SESSION['edad'];
    echo "</br>";
    echo "<a href='Sesiones3.php'>Comprobar valores en otra web</a>";
    echo "</br>";
    echo "<a href='Sesiones4.php'>Comprobar valores en otra web</a>";

?>

</body>
</html>