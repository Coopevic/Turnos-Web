 <?php
 
 include ("conexionmysqli.php");
   //Abrir una conexion con el servidor MySQL
  // $conexio = mysql_connect("localhost","root","");
  // mysql_select_db ("turnosweb", $conexio) OR die ("No se puede conectar"); 
 
 //Recoger datos que llegan
   $ape=strtoupper($_POST['apellido']);
   $nom=strtoupper($_POST['nombre']);
   $doc=$_POST['documento'];
   $fechnac = $_POST['fecha'];
   $domi = $_POST['domicilio'];
   $tel = $_POST['telefono'];  //No obligatorio como administrador
   $email = $_POST['email'];  //No obligatorio como administrador
   $pass = $_POST['password'];
   $iniape = substr($ape, 0, 1);
   $ininom = substr($nom, 0, 1);
   //echo "iniape <b>".$iniape."</b>";
   //echo "ininom <b>".$ininom."</b>";

   $dniayn = $iniape.$ininom.$doc;   //concatena las iniciales del apellido y nombre y el dni
   //echo "dniayn <b>".$dniayn."</b>";
   ini_set('date.timezone','America/Argentina/Buenos_Aires'); //seteamos la zona horaria
   $time = time();
   $fechareg = date("d-m-Y H:i:s",$time);  //guarda la fecha de registración del paciente
   //echo "fechareg <b>".$fechareg."</b>";

   //1.- Comprobar que no haya otro paciente con el mismo documento
   $sql="SELECT dni_p FROM paciente WHERE dni_p='".$doc."'";
   $result=mysqli_query($conexio,$sql); //Recibe los resultados de la consulta sql
   if($row=mysqli_fetch_array($result))
   {
     echo "El Documento <b>".$doc."</b> ya fue ingresado por otro paciente.";
     exit();   /*cancelar la ejecucion del script y por tanto de la pagina web*/
   }
   
   //2.- Comprobar que no haya otro usuario registrado con el mismo correo
   $sql="SELECT email_p FROM paciente WHERE (email_p<>'') and (email_p='".$email."')";
   $result=mysqli_query($conexio,$sql); //Recibe los resultados de la consulta sql
   if($row=mysqli_fetch_array($result))
   {
     echo "El correo electronico <b>".$email."</b> ya fue registrado por otro usuario.";
     exit();  /*cancelar la ejecucion del script y por tanto de la pagina web*/
   }
   //Si se ha logrado pasar las dos validaciones anteriores, entonces...
   //Realizar el INSERT en la tabla
   
  
   //Envío de datos al correo del Paciente
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
   $sendTo = $_POST['email']; 
   $subject = "Registro en Turnosweb"; 
   $headers = 'From:'.$_POST['email']."\r\n".
               'Reply-To:'.$_POST['email']."\r\n".
               'X-Mailer:PHP/'.phpversion();
   $link = "www.turnosweb.com";   //Reemplazar por link definitivo cuando esté funcionando el Servidor
   //$nombre = $_POST["nombre"]; 
   //$contraseña = $_POST["contraseña"]; 
   //$observacion = $_POST["observacion"]; 
   //$opciones = $_POST["opciones"]; 
   $message = "\nNombre: " . $nom . "\nApellido: " . $ape . "\nUsuario: " . $dniayn . "\nContraseña: " . $pass . "\nHaga clic aquí: " . $link; 
   
   mysqli_query($conexio,"INSERT INTO paciente(apellido_p,nombre_p,dni_p,fechanac_p,domicilio_p,telefono_p,email_p,password_p,dni_ini_ayn_p,fecharegistracion_p) VALUES ('$ape', '$nom', '$doc','$fechnac','$domi','$tel', '$email', '$pass', '$dniayn', '$fechareg')");
   //echo "Registro Exitoso!"; // <br><br> Usuario: <b>".$nik."</b> <br>Mail: <b>".$cor."</b>";
   Header ("location: ../reg_exitoso_adm.html");
   //if (mail($sendTo, $subject, $message, $headers))
    //{
    //echo "Mail enviado correctamente";
    //}else {
         
         //echo "Error al Enviar el Mail";
       
       //}
   } //cierra el If que valida email
   //Fin envío de datos al correo del Paciente
   else {   
   $email =""; //Asigno un valor vacío al email para que no grabe basura en ese campo
   mysqli_query($conexio,"INSERT INTO paciente(apellido_p,nombre_p,dni_p,fechanac_p,domicilio_p,telefono_p,email_p,password_p,dni_ini_ayn_p,fecharegistracion_p) VALUES ('$ape', '$nom', '$doc','$fechnac','$domi','$tel', '$email', '$pass', '$dniayn', '$fechareg')");
  // echo "Registro Exitoso!"; // <br><br> Usuario: <b>".$nik."</b> <br>Mail: <b>".$cor."</b>";
   Header ("location: ../reg_exitoso_sin_email_adm.html"); 
   }//cierra el Else que valida email
   //Cerrar la conexion
   //mysql_close($conexio);
?>

