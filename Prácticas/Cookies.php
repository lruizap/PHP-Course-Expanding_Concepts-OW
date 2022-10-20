<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <h1>Cookies y sesiones</h1>

<?php 

    // Creacción y como aceptar las cookies

    // if(isset($_GET['aceptar'])){
    //     $caducidad = time() + (3600 * 24 * 365);
    //     setcookie("micookie", 1, $caducidad);
    // }

?>

<?php

    // if(!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])){

?>

<!-- 
    <h2>Cookies</h2>
    <p>Debes aceptar las cookies para seguir navegando</p>

    <a href="?aceptar=1">Aceptar</a> 
-->

<?php

    // }

?>

<?php 

    // Creación, obtención y eliminación de cookies

    // setcookie("noexpira",1);
    // setcookie("caduca",2,time() + 20);

    // setcookie("idioma","esp");
    // if($_COOKIE["idioma"] == "esp") {
    //     echo "Tu idioma es castellano";
    // }

    // unset($_COOKIE['noexpira']);

    // setcookie("noexpira", "", time() -1);

?>

<?php 

    // Comprobar si las cookies están aceptada.
    
    if(count($_COOKIE)>0) {
        echo "Tiene alguna cookie";
    }
    else {
        echo "No tiene ninguna cookie";
    }


?>

</body>
</html>