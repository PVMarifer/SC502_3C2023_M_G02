<?php

$cadenatexto = $_POST["nombre"];
    echo 'Subio el archivo:' . $cadenatexto . '<br>';

    //datos del arhivo
    $nombre_archivo = $_FILES['archivo']['name'];
    echo $nombre_archivo . '<br>';
    $tipo_archivo = $_FILES['archivo']['type'];
    echo $tipo_archivo . '<br>';
    $tamano_archivo = $_FILES['archivo']['size'];
    echo $tamano_archivo . '<br>';

    //compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 3000000))) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 300 Kb máximo.</td></tr></table>";
}else{
 $rutafinal = 'C:\xampp\htdocs\ejercicios/practicas/subir_archivo/img\/'.$nombre_archivo;
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $rutafinal)){
           echo "El archivo ha sido cargado correctamente.";
    }else{
           echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}


?>