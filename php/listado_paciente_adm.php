<html>
<head>
<title>Listado de Pacientes</title>
      <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
<?php include("header_adm.php"); ?>
<?php
include("conexionmysqli.php");
//$dni=$_POST['dni'];
$Sql="Select * from paciente order by dni_p";
$result=mysqli_query($conexio,$Sql);
//if ($row=mysqli_fetch_array($result))
//  {
     // Mensaje????
//   }
// else{
//   	Header ("location: ../paciente_no_encontrado_adm.html");
//     exit();  /*cancelar la ejecucion del script y por tanto de la pagina web*/
//  }  
?>
<!--Creo la tabla-->
<!--<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>--> 
<div class="table-responsive">
  <table class="table table-bordered">
	<TR>
		<TD><h4>Apellido</h4></TD>
		<TD><h4>Nombre</h4></TD>
		<TD><h4>Documento</h4></TD>
		<TD><h4>Fecha Nacimiento</h4></TD>
		<TD><h4>Telefono</h4></TD>
		<TD><h4>Email</h4></TD>
	</TR>
	<br></br>
<!--<form name="form1" method="post" action="modifica_paciente_adm.php">-->
<!--Muestro los datos del paciente en la tabla-->
	<?php
		while($row = mysqli_fetch_array($result))
		{
		printf("<tr><td>
		<INPUT TYPE='text' NAME='apellido_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		<INPUT TYPE='text' NAME='nombre_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		<INPUT TYPE='text' NAME='dni_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		<INPUT TYPE='text' NAME='fechanac_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		<INPUT TYPE='text' NAME='telefono_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		<INPUT TYPE='text' NAME='email_p' SIZE='20' MAXLENGTH='30' value='%s'></td><td>
		</td></tr>", $row["apellido_p"],$row["nombre_p"],$row["dni_p"],$row["fechanac_p"],$row["telefono_p"],$row["email_p"]);
		}
		mysqli_free_result($result);
	?>
   </TABLE>
</div>
<a href="header_adm.php" class="btn btn-primary" role="button">Salir</a>
<!--<button type="submit"  class="btn btn-warning left ">Salir</button>-->
<!--</form>-->
</body>
</html>