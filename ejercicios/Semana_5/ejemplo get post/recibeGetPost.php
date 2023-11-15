<?php
    $valorRecibido = $_POST['valorEnviado'];
    //$valorRecibido = (isset($_GET['valorEnviado'])) ? $_GET['valorEnviado'] : "";
    $apellidoRecibido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
    echo $valorRecibido." ".$apellidoRecibido;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>