<?php
    
    include("conexion.php");
    
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    
       
    if ($usuario !== "" && $password !=="")
       
	   {
	    $sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario'");
		 
		 if ( $f = mysql_fetch_array($sql))
		     {
			 
			   if ($password == $f['password'])
			    {
				 
				       Header ("location: admin.html");  
			 
			     }else
				 
				 {
				 
				    
					echo "Password Incorrecto";
				    Header ("location: ../modulos/index.html");
				 
				 }
		       
	        
                 }else

                  {
      
		         	echo "Usuario Incorrecto";
	                Header ("location: ../modulos/index.html");
			
                  }
	
	
			
 }else{
	      
		  Header ("location: ../modulos/index.html");
		  echo "No se ingreso ningun dato"; 
 }
    
?>
