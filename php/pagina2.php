<?php
session_start();
$_SESSION['usuario']=$_REQUEST['campousuario'];
$_SESSION['clave']=$_REQUEST['campoclave'];
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se almacenaron dos variables de sesi�n.<br><br>
<a href="pagina3.php">Ir a la tercer p�gina donde se recuperar�n las variables de sesi�n</a>
</body>
</html>