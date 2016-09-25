<?php
include("conexionmysqli.php");
$dni=$_POST['dni_p'];
$Sql="DELETE FROM paciente WHERE dni_p='$dni'";
mysqli_query($conexio,$Sql);
Header ("location: ../paciente_borrado.html");
?>
