<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>
<h1>USANDO CONDICIONALES</h1>



<?php 

class Coche{
/////////////////// Caracteristicas i/o Propiedades
  private $ruedas;
  var $color;
  var $motor;
  
  function __construct(){
   //this=referencia a la clase
   $this->ruedas=4;
   $this->color="";
   $this->motor=1600;
  }
  function get_ruedas(){

    return $this->ruedas;
  }
  function arrancar(){
    
    echo "Coche arrancado <br>";
  }

  function girar(){  //function == a metodo
              //(cuando esta dntro de una clase) 
  }

  function frenar(){
    
  }

  function establece_color($color_coche,$nombre_coche ){

   $this->color=$color_coche;

   echo "El color de este coche" . $nombre_coche . "&nbsp es : &nbsp" . $this->color . "<br>";
  }
}
/*
$renault=new Coche(); // INSTANCIAS o EJEMPLARES
$toyota=new Coche();
$peugeot=new Coche();
*/
//$renault->arrancar();
//echo $peugeot->ruedas . "&nbsp ruedas";
//$renault->establece_color("Amarillo");

class Camion{ // Caracteristicas i/o Propiedades
      
    var $ruedas;
    var $color;
    var $motor;
   
    function __construct(){ //this=referencia a la clase
      
     $this->ruedas=8;
     $this->color="";
     $this->motor=2600;
    }
  
    function arrancar(){
      
      echo "Camion arrancado <br>";
    }
  
    function girar(){  //function == a metodo
                //(cuando esta dntro de una clase) 
    }
  
    function frenar(){
      
    }/*
    function establece_color($color_camion){
  
     $this->color=$color_camion;
  
     echo "El color de este camion es :&nbsp" . $this->color . "<br>";
    }*/
  
    function establece_color($color_camion, $nombre_camion){
  
     $this->color=$color_camion;
     //$this->nombre=$nombre_camion;
  
     echo "El color de este camion &nbsp " . $nombre_camion .  "&nbsp es :&nbsp" . $this->color . "<br>" ;
    }
}  
/*$cam=new Camion();
$cam->establece_color("Amarillo", "Trailer");*/

?>
</body>
</html>