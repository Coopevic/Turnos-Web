<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Pacientes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name = "viewport" content="width=device-width", user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0>
    <!--Poner este INCLUDE aqui para que funcionen las validaciones-->
    <?php include("header_adm.php"); ?> 
    
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.css"/>
    <link rel="stylesheet" href="libs/navbar.css">

    <link rel="stylesheet" href="css/datepicker.css"/>

    <link href="jquery.realperson.css" rel="stylesheet" media="screen"/>
     
    <!--A continuación, para que funcionen las validaciones poner ../ antes del js 
     para encontrar los archivos  de validación  en la carpeta js -->    
    <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="../js/bootstrapValidator.js"></script>

    <!--<script src="js/bootstrap-datepicker.js"></script> -->
      
</head>

<body>
   <!--Cuerpo del Formulario de Registro-->
        <div class="row">
            <!-- form: -->
            <section>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="page-header">
                        <h2>Formulario de Registro</h2>
                    </div>
                    <LEGEND>DATOS PERSONALES</LEGEND>

                    <form id="defaultForm" method="post" class="form-horizontal" action="Alta_Pacientes_adm.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> * Apellido</label> 
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="apellido" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> * Nombre</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="nombre" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">* Nº de Documento</Label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="documento" />
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-lg-3 control-label">* Fecha de Nacimiento</label>
                            <div class="col-lg-5">
                                 
                              <!-- <input class="datepicker" name="fecha" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);">
                                  (DDMMYYYY) -->
                                <input class="form-control" name="fecha" type="text" minlength="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);">  (DD/MM/YYYY)
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">* Domicilio</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="domicilio" />
                            </div>
                        </div>
                       
                        <div class="form-group">
                                <label class="col-lg-3 control-label">Teléfono</label>
                               
                                <div class="col-lg-5">
                                    <input type="text"  class="form-control" name="telefono" pattern="[0-9]+">
                                </div>
                       </div> 


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="email" />
                            </div>
                        </div>
                      
                        <legend>DATOS DE ACCESO</legend>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contrase&ntilde;a</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Repita Contrase&ntilde;a</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="confirmPassword" />
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label" id="captchaOperation"></label>
                            <div class="col-lg-2">                              
                                <input type="text" class="form-control" name="captcha">                     
                            </div>

                                                
                            <label class="col-lg-3 control-label">Control de Seguridad</label>                            
                           

                        </div>                


                        (*) Campos requeridos
                        <div class="form-group" >
                            <div class="col-lg-4 col-lg-offset-2" > 
                                 <div class ="pull-center"> <button type="submit"  class="btn btn-success left ">REGISTRAR </button> </div>              
                            </div>



                        
                        <a href="header_adm.php" class="btn btn-primary" role="button">Salir</a>
                        </div> <!-- cierra la clase form-group de los botones REGISTRAR Y Salir-->
                    
                    </form>

                    </div>
            </section>
            <!-- :form -->
        </div>


<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    
    $('#captchaOperation').html([randomNumber(1000, 9999), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
     message: 'This value is not valid',
     feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },

        fields: {
            apellido: {
                
                validators: {
                    notEmpty: {
                        message: 'El Apellido es requerido y no puede estar vacio'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'El Apellido debe contener mas de 2 caracteres y menos de 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'El Apellido debe contener solamente letras'
                    },
                   
                }
            },


             nombre: {
                
                validators: {
                    notEmpty: {
                        message: 'El Nombre es requerido y no puede estar vacio'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'El Nombre debe contener mas de 2 caracteres y menos de 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'El Nombre debe contener solamente letras'
                    },
                   
                }
            },


           documento: {
                
                validators: {
                    notEmpty: {
                        message: 'El Documento es requerido y no puede estar vacio'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'El Documento debe contener mas de 7 caracteres y menos de 9 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El Documento solo debe contener solamente números'
                    },
                   
                }
            },

            fecha: {
                 validators: {
                    notEmpty: { 
                       message: 'La fecha de nacimiento es requerida y no puede ser vacia'
                    },
                   date: {
                         format: 'DD/MM/YYYY',
                         message: 'La fecha de nacimiento no es valida'
                    },
                   regexp: {
                        regexp: /^\d{1,2}\/\d{1,2}\/\d{2,4}$/,
                        message: 'Fecha incorrecta'
                    },
                   stringLength: {
                        min: 10,
                        max: 10,
                        message: 'Fecha longitud incorrecta'
                    }, 
                   
                }
            },

            domicilio: {
                 validators: {
                    notEmpty: {
                       message: 'El domicilio es requerido y no puede ser vacío'
                    },
                }
            },

      /*      email: {
                validators: {
                    emailAddress: {
                        message: 'La Dirección de Email no es válida'
                    }
                }
            },

             telefono: {
               
                   validators: {
                     digits: {
                        message: 'El Teléfono solo puede contener números'
                    }
                }
            },
      */


            password: {
                validators: {
                    notEmpty: {
                        message: 'La contraseña es requerida y no puede ser vacía'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'La contraseña y su confirmación no son iguales'
                    },
                   /* different: {
                        field: 'username',
                        message: 'The password can\'t be the same as username'
                    } */
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'La confirmación de contraseña es requerida y no puede ser vacía'
                    },
                    identical: {
                        field: 'password',
                        message: 'La contraseña y su confirmación no son iguales'
                    },
                   /* different: {
                        field: 'username',
                        message: 'The password can\'t be the same as username'
                    } */
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Respuesta incorrecta',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
});

</script>


 <script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
  });
</script>

<SCRIPT>
function IsNumeric(valor) 
{ 
var log=valor.length; var sw="S"; 
for (x=0; x<log; x++) 
{ v1=valor.substr(x,1); 
v2 = parseInt(v1); 
//Compruebo si es un valor numérico 
if (isNaN(v2)) { sw= "N";} 
} 
if (sw=="S") {return true;} else {return false; } 
} 
var primerslap=false; 
var segundoslap=false; 
function formateafecha(fecha) 
{ 
var long = fecha.length; 
var dia; 
var mes; 
var ano; 
if ((long>=2) && (primerslap==false)) 
    { dia=fecha.substr(0,2); 
      if ((IsNumeric(dia)==true) && (dia<=31) && (dia!="00")) { fecha=fecha.substr(0,2)+"/"+fecha.substr(3,7); primerslap=true; } 
         else { fecha=""; primerslap=false;} 
    }
 else 
{ dia=fecha.substr(0,1); 
if (IsNumeric(dia)==false) 
{fecha="";} 
if ((long<=2) && (primerslap=true)) {fecha=fecha.substr(0,1); primerslap=false; } 
} 
if ((long>=5) && (segundoslap==false)) 
{ mes=fecha.substr(3,2); 
if ((IsNumeric(mes)==true) &&(mes<=12) && (mes!="00")) { fecha=fecha.substr(0,5)+"/"+fecha.substr(6,4); segundoslap=true; } 
else { fecha=fecha.substr(0,3);; segundoslap=false;} 
} 
else { if ((long<=5) && (segundoslap=true)) { fecha=fecha.substr(0,4); segundoslap=false; } } 
if (long>=7) 
{ ano=fecha.substr(6,4); 
if (IsNumeric(ano)==false) { fecha=fecha.substr(0,6); } 
else { if (long==10){ if ((ano==0) || (ano<1900) || (ano>2100)) { fecha=fecha.substr(0,6); } } } 
} 
if (long>=10) 
{ 
fecha=fecha.substr(0,10); 
dia=fecha.substr(0,2); 
mes=fecha.substr(3,2); 
ano=fecha.substr(6,4); 
// Año no biciesto y es febrero y el dia es mayor a 28 
if ( (ano%4 != 0) && (mes ==02) && (dia > 28) ) { fecha=fecha.substr(0,2)+"/"; } 
} 
return (fecha); 
}
</SCRIPT>

<!--<script src="js/jquery.realperson.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#captcha").realperson();
    });
</script> -->



</body>
</html>