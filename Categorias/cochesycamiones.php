<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>
<h1>USANDO CONDICIONALES</h1>



<?php

  class Coche{   //// Caracteristicas i/o Propiedades
                         
     var $ruedas;
     var $color;
     var $motor;
  
     function __construct(){  //this=referencia a la clase
        
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
        }
    }

 /*
 include("condicionalesf.php");
 */
 $mazda=new Coche();
 

 echo  $mazda->ruedas . "&nbsp ruedas <br>";

    

?>
</body>
</html>