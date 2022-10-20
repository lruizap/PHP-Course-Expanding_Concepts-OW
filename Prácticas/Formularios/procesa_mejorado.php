<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Procesa_mejorado.php</title>
</head>
<body>

<?php

    // Restricciones
    $directorioSubida = "uploads/";
    $max_file_size = "521000";
    $extensionesValidas = array("jpg", "png", "gif");

    var_dump($_FILES);
    echo "</br></br>";

    if(isset($_FILES['fichero'])){
        $errores = 0;
        $nombreArchivo = $_FILES['fichero']['name'];
        $fileSize = $_FILES['fichero']['size'];
        $directorioTemporal = $_FILES['fichero']['tmp_name'];
        $tipoArchivo = $_FILES['fichero']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        var_dump($arrayArchivo);
        $extension = $arrayArchivo['extension'];
        echo "</br></br>";

        if(!in_array($extension, $extensionesValidas)) {
            echo "Extensión inválida";
            $errores = 1;
            echo "</br></br>";
        }

        if($fileSize > $max_file_size) {
            echo "La imágen excede el tamaño máximo";
            $errores = 1;
            echo "</br></br>";
        }

        if($errores == 0){
            $nombreCompleto = $directorioSubida.$nombreArchivo;
            move_uploaded_file($directorioTemporal,$nombreCompleto);
        }
    }

?>

</body>
</html>