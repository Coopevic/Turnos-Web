<?php 
$sendTo = "hernanalbornoz70@gmail.com"; 
$subject = "primerformulario"; 
$nombre = $_POST["nombre"]; 
$contraseña = $_POST["contraseña"]; 
$observacion = $_POST["observacion"]; 
$opciones = $_POST["opciones"]; 
$headers .= ""; 
$message = "\nNombre: " . $nombre . "\nContraseña: " . $contraseña . "\nobservacion: " . $observacion . "\nOpcion elegida: " . $opciones; 
mail($sendTo, $subject, $message, $headers); 
?>