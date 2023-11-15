<?php
//tomo el valor de un elemento de tipo texto del formulario
$cadenatexto = $_POST["nombre"];
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";

//datos del arhivo
$nombre_archivo = $_FILES['archivo1']['name'];
echo $nombre_archivo.'<br>';
$tipo_archivo = $_FILES['archivo1']['type'];
echo $tipo_archivo.'<br>';
$tamano_archivo = $_FILES['archivo1']['size'];
echo $tamano_archivo.'<br>';
	
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 3000000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 300 Kb máximo.</td></tr></table>";
}else{
	$rutafinal = 'C:\xampp\htdocs\ejercicios/Semana_5\manejo_archivos\img\/'.$nombre_archivo;
   	if (move_uploaded_file($_FILES['archivo1']['tmp_name'], $rutafinal)){
      		echo "El archivo ha sido cargado correctamente.";
   	}else{
      		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
   	}
}
?>








