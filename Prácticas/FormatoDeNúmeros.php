<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Formato de números</h1>

<?php

    // Matemáticas

    $nota = 7.34;

    if(is_int($nota)){
        echo "La nota es un entero : $nota </br>";
    } elseif(is_float($nota)) {
        echo "La nota es un float : $nota </br>";
    }

    echo number_format("1000000")."</br>";
    echo number_format("1000000", 2)."</br>";
    echo number_format("1000000", 2, ",", ".")."</br>";
    // En la última línea he dicho que los decimales vayan con , y los puntos de millar con .

    echo "<br><br><br>";

    echo round("7.50")."</br>";
    echo ceil("7.50")."</br>";
    echo floor("7.50")."</br>";

    echo "<br><br>";

    echo round("1.50",0,PHP_ROUND_HALF_UP)."</br>";
    echo round("1.50",0,PHP_ROUND_HALF_DOWN)."</br>";
    echo round("1.50",0,PHP_ROUND_HALF_EVEN)."</br>";
    echo round("1.50",0,PHP_ROUND_HALF_ODD)."</br>";

    echo "<br><br>";

    echo ceil("0.60")."</br>";
    echo ceil("5")."</br>";
    echo ceil("5.1")."</br>";
    
    echo floor("0.60")."</br>";
    echo floor("5")."</br>";
    echo floor("5.1")."</br>";
    
    echo "<br><br>";

    // Funciones varias

    
?>

</body>
</html>