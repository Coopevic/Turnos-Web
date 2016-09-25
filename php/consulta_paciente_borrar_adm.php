<html>
<head>
<title>Buscar y modificar registros en PHP</title>
</head>
<body>
<?php include('header_adm.php'); ?>
<br></br>
<H2>Consulta de Registros de Pacientes para Borrar</H2>
<br></br>
<FORM method="post" class="form-horizontal" ACTION="busca_paciente_borrar_adm.php">
<label class="col-lg-3 control-label">Numero Documento:</label>
<INPUT TYPE="text" NAME="dni" SIZE="10" MAXLENGTH="12">
<button type="submit"  class="btn btn-info left ">Buscar</button>
</FORM>
</body>
</html>