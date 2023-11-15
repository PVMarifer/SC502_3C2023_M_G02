<?php
    session_start();

    $_SESSION["usuario"] = "perro";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ahora está logueado <?php echo $_SESSION["usuario"] ?></h1>
</body>
</html>