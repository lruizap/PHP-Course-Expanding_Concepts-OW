<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones</title>
</head>
<body>

    <h1>Funciones</h1>

<?php

    // Apertura y lectura

    $miFichero = fopen("archivo1.txt", "r+");
    // r+ --> lectura y escrituras
    // las opciones a la hora de leer un fichero están en el apartado de notion para consulta.

    if($miFichero == false){
        echo "Error al abrir el fichero";
    }else {
        $contenido = fread($miFichero, filesize("archivo1.txt"));
        // echo $contenido;
    }

    // $miFichero2 = fopen("archivo2.txt", "w");
    // w --> sobreescribe el contenido

    // $miFichero3 = fopen("archivo3.txt", "w");
    // w --> si el fichero no existe, lo crea.

    rewind($miFichero);
    while(feof($miFichero) == false) {
        echo fgets($miFichero)."</br>";
    };

    $todo = file_get_contents("archivo1.txt");
    echo $todo."</br>";

    $arrayFichero = file("archivo1.txt");
    var_dump($arrayFichero);

    // Escritura

    $miFichero2 = fopen("archivo2.txt", "a+");
    // a+ --> apertura para lectura y escitura. Se pone el puntero al final del archivo.
    // Si no existe se intenta crear.
    fwrite($miFichero2, "Escribe dentro del fichero");
    // Le paso el puntero del archivo y el contenido de este.
    fflush($miFichero2);

    echo filesize("archivo3.txt")."</br>";
    $fileInfo = stat("archivo3.txt");
    var_dump($fileInfo);

    echo "<br><br><br>";

    // Directorios

    echo getcwd()."</br>";
    var_dump(scandir(getcwd()));

    echo "<br>";

    chdir('../');
    echo getcwd();

?>

</body>
</html>