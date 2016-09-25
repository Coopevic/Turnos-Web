 
 <?php    
    
 $conexio=mysql_connect("localhost","root","")or die("Error en Conexion");
 $db=mysql_select_db("turnosweb")or die("Error en Base de Datos");
   return($conexio);
   return($db);
 ?>