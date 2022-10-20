<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario4</title>
</head>

<body>

    <form id="miFormu" action="actualizar.php" method="get">

        <label for="nombre">
            Nombre: <input type="text" name="nombre" id="nombre">
        </label>
        <?php
        
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $conexion = mysqli_connect($servidor,$usuario,$password) or die("Error de conexión");

            mysqli_select_db($conexion,"usuarios");

            $consultar = "SELECT nombre FROM clientes";

            $registros = mysqli_query($conexion, $consultar);

            echo "<label for='seleccionar'>Elige un nombre: </label>";
            echo "<select name='seleccionar' id='seleccionar'";

            while($registro = mysqli_fetch_row($registros)){

                echo "<option value='$registro[0]'>".$registro[0]."</option>";

            }
            echo "</select>";
        
        ?>
        <input type="submit" value="Actualizar">
    </form>

</body>

</html>