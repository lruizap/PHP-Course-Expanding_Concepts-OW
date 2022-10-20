<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clase1</title>
</head>
<body>

<?php

    // objetos y clase

    class PrimeraClase{
        public $nombre = "Lucas";

        public function mostrarNombre() {
            echo $this-> nombre;
        }
    }

    $instancia = new PrimeraClase();

    echo $instancia->nombre;

    $instancia->mostrarNombre();

?>

</body>
</html>