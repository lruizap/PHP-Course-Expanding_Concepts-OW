<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumno</title>
</head>
<body>

<?php

    class Alumno{

        private $nombre = null;
        private $apellidos = null;
        public $curso = null;

        function getNombre(){
            return $this -> nombre;
        }

        function getApellidos(){
            return $this -> apellidos;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        function calcularLetras($nombre){
            return strlen($this->nombre);
        }
    }

    $alumno1 = new Alumno();
    $alumno1->setNombre("Lucas");
    $alumno1->setApellidos("Ruiz Zapata");

    $nombrealumno1 = $alumno1->getNombre();
    echo $nombrealumno1."</br>";

    $apellidosalumno1 = $alumno1->getApellidos();
    echo $apellidosalumno1."</br>";

    $letras = $alumno1->calcularLetras($nombrealumno1);
    echo $letras."</br>";

    // Funciones de clases

    if(class_exists("Alumno")){
        echo "Clase: ".get_class($alumno1)."</br>";
    }

    $metodoAlumno = get_class_methods("Alumno");
    var_dump($metodoAlumno);
    echo "</br>";

    $propiedadesAlumno = get_class_vars("Alumno");
    var_dump($propiedadesAlumno);
    echo "</br>";

?>

</body>
</html>