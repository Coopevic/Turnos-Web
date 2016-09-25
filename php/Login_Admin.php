 <?php
 
 include ("conexionmysqli.php");
   //Abrir una conexion con el servidor MySQL
  // $conexio = mysql_connect("localhost","root","");
  // mysql_select_db ("turnosweb", $conexio) OR die ("No se puede conectar"); 
  
  //Almacenamos los valores en las variables de sesión
  session_start();
  $_SESSION['usuario_mostrar']=$_REQUEST['usuario'];
  $_SESSION['clave_mostrar']=$_REQUEST['password'];
 // Se almacenaron dos variables de sesión

 //Recoger datos que llegan
   $usu = $_POST['usuario'];
   $pass = $_POST['password']; 

  
   //1.- Comprobar que el usuario y contraseña coinciden
   $sql="SELECT nombre_usuario FROM usuario WHERE nombre_usuario='".$usu."'and clave_usuario='".$pass."'";
   $result=mysqli_query($conexio,$sql);
   if ($row=mysqli_fetch_array($result)) //Si la consulta devuelve filas entra por el IF y se logea, si devuelve NULL entra por el Else y sale
   {
     /*echo "BIENVENIDO"; /*Entra cuando se cumple la condición del IF*/ /*MOSTRAR UNOS SEGUNDOS*/
   Header ("location: ../php/header_adm.php");
   /*Header ("location: ../form_admin.php");*/
      /*Header ("location: ../php/pagina3.php");*/
   } 
   else {
    echo "USUARIO O CLAVE ERRONEA"; /*MOSTRAR UNOS SEGUNDOS Y VOLVER A Login_Admin*/
    exit();   /*cancelar la ejecucion del script y por tanto de la pagina web */
   }
?>

