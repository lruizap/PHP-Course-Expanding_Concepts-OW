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

    // Sesiones

    session_id("22");
    echo session_name();

    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Luisja";

    var_dump($_SESSION);

    unsset($_SESSION['nombre']);
    if(isset($_SESSION['nombre']) == false ){
        echo "La variable de sesión 'nombre', no existe";
    }

    session_destroy();

?>

</body>
</html>