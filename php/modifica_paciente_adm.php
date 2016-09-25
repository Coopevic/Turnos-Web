<?php
include("conexionmysqli.php");
$apellido=strtoupper($_POST['apellido_p']);
$nombre=strtoupper($_POST['nombre_p']);
$dni=$_POST['dni_p'];
$fechnac = $_POST['fechanac_p'];
$telefono = $_POST['telefono_p'];  //No obligatorio como administrador
$email = $_POST['email_p'];  //No obligatorio como administrador
$Sql="UPDATE paciente SET apellido_p='$apellido',
nombre_p='$nombre', fechanac_p='$fechnac', telefono_p='$telefono',
email_p='$email' WHERE dni_p='$dni'";
mysqli_query($conexio,$Sql);
Header ("location: ../paciente_actualizado.html");
?>
