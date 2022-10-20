<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mandarMail.php</title>
</head>
<body>

<?php

    $to = "markutovich@gmail.com";

    $subject = "Email de confirmación";

    $message = "Hola confirma haciendo click en el siguiente enlace ";

    $from = "administrator@dominio.com";

    $headers = "From: $from";

    mail($to, $subject, $message, $headers);

    echo "Mail enviado";

?>

</body>
</html>