<?php
    session_start();
?>
<!DOCTYPE html>
    <title>Formulario Administrador</title>
    <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="./libs/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="./libs/navbar.css" rel="stylesheet">

    <script src="./libs/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Turnos OnLine</a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
           <!--   <li><a href="#">Información</a></li>  -->
           <!--   <li><a href="#">Contacto</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="form_registro_adm.html">Nuevo</a></li>
                  <li><a href="consulta_paciente_adm.html">Editar</a></li>
                  <li><a href="consulta_paciente_borrar_adm.html">Eliminar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Listado Completo</a></li>
                  <li><a href="#">Otro Listado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Medicos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nuevo</a></li>
                  <li><a href="#">Editar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Listado Completo</a></li>
                  <li><a href="#">Otro Listado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Turnos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nuevo</a></li>
                  <li><a href="#">Editar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Listado Completo</a></li>
                  <li><a href="#">Otro Listado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Especialidad <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nuevo</a></li>
                  <li><a href="#">Editar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Listado Completo</a></li>
                  <li><a href="#">Otro Listado</a></li>
                </ul>
              </li>          
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Obra Social <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nuevo</a></li>
                  <li><a href="#">Editar</a></li>
                  <li><a href="#">Eliminar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Listado Completo</a></li>
                  <li><a href="#">Otro Listado</a></li>
                </ul>
              </li>           
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>  
                <?php
                 echo "<br>";
                 echo "Usuario:".$_SESSION['usuario_mostrar'];
                 ?>
                </li>
              <li><a href="form_ingreso_turno_web_adm.html">Salir</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  </div>


  <div class="container">
    <div class="row-fluid">   
     <div class="span12">
      <div class="modal">
        <div class="modal-header">header</div>
        <div class="modal-body">body</div>
        <div class="modal-footer">footer </div> 
      </div>  <!-- /modal  -->
     </div>   <!-- /span12 -->
    </div>  <!-- /row-fluid -->   
  </div> <!-- /container -->

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./libs/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./libs/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./libs/ie10-viewport-bug-workaround.js"></script>
  

</body></html>