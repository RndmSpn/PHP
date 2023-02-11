<?php

include("condicionalesf.php");
class Motos extends Coche{

 function __construct(){
    //this=referencia a la clase
    $this->ruedas=2;
    $this->color="";
    $this->motor=1600;
   }
   /* Sobreescribir funcion heredada */ 
   function establece_color($color_moto, $nombre_moto){
  
      $this->color=$color_moto;
      //$this->nombre=$nombre_camion;
   
      echo "El color de esta moto &nbsp " . $nombre_moto .  "&nbsp es :&nbsp" . $this->color . "<br>" ;

   }
   /* Agregar algo a una funcion heredada  */
   function arrancar(){

      parent::arrancar();
      echo "Moto arrancando";
   }
}

$aereox=new Motos;
$toyota=new Coche;
echo "Las aeroex tiene &nbsp" . $aereox->ruedas . "&nbsp ruedas <br>";
echo "El coche Toyota tiene " . $toyota->ruedas . "&nbsp ruedas <br>"; ;
$aereox->establece_color("Amarillo", "Yamaha");
$aereox->arrancar();


?>
</body>
</html>