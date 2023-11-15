<?php
//iniciar sesion
session_start();
//Crear variables de sesion
$_SESSION["nombreLogueado"] = "feo";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- llamar a una variable de sesion creada en el php-->
    <input type="text" value="<?php echo $_SESSION["nombreLogueado"]; ?>">
</body>
</html>