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
Se almacenaron dos variables de sesión.<br><br>
<a href="pagina3.php">Ir a la tercer página donde se recuperarán las variables de sesión</a>
</body>
</html>