<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Procesa.php</title>
</head>
<body>

<?php

    if(isset($_POST['usuario'])){
        if(!empty($_POST['usuario'])){
            $usuario = $_POST['usuario'];
            echo $usuario."</br>";
        }
    }

    if(isset($_POST['password'])){
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
            echo $password."</br>";
        }
    }

    var_dump($_FILES);
    echo "</br>";
    $directorio = ini_get("upload_tmp_dir");
    echo $directorio."</br>";

    $directorioTemp = $_FILES['fichero']['tmp_name'];
    move_uploaded_file($directorioTemp, $_FILES['fichero']['name']);


?>

</body>
</html>