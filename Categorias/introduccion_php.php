<html>

<head></head>

<header><header>

<body>

<div >
  <h1>PHP<h1>
  <p>
    
    <?php
    
    // COMENTARIOS // 
    
    Ejecucion del Lado del Cliente  Javascript --- VBSript --- Applets Java --- HTML --- CSS ---
    
    Ejecucion del Lado del Servidor Crea conexion en la based de datos, devuelve html
    Lenguajes del lado del servidor--- PHP --- JSP --- PERL --- ASP ---
    
    SOFTWARE  --> Apache , PHP , MySQL 
   

///////////////////////
INCLUIR PHP EXTERNO ////
///////////////////////

<?php
  include("include.php");
  
  dame_datos();

    $nombre="abc";

    $edad=18;
  
    print $nombre;
  
?>
 ////////////////////////////////////////
    Operadores de comparacion //////////////
    ////////////////////////////////////////
    $var1==$var2 // V si son Iguales
    
    $var1===$var2 // V si son Identica (iguales y del mismo tipo)

    $var1!=$var2 // V si son Diferentes

    $var1<>$var2 // V si son Diferentes (diferentes y diferente tipo )
<?php
 if(isset($_POST["enviando"])){
   $usuario=$_POST["nombre_usuario"];
   $edad=$_POST["edad_usuario"];
   
   if($usuario=="Juan"){
     echo "Puedes entrar";
    }
    else{
      echo "No puedes entrar";
    }
  }
  ?>

////////////////////////////////////////////////
Operadores matematicos  ////////////////////////
////////////////////////////////////////////////

<?php

include("calculadora.php");
  
  if(isset($_POST["button"])){
      
  $numero1=$_POST["num1"];
  $numero2=$_POST["num2"];
  $operacion=$_POST["operacion"];
    calcular($operacion);
  }
?>

<?php

 function calcular($calculo){
  
  if(!strcmp("Suma",$calculo)){
      global $numero1;
      global $numero2; 
    echo "El resultado es:" . ($numero1+$numero2)  ;
   }

   if(!strcmp("Resta",$calculo)){
      global $numero1;
      global $numero2; 
    echo "El resultado es:" . ($numero1-$numero2)  ;
   }

   if(!strcmp("Multiplicación",$$calculo)){
      global $numero1;
      global $numero2; 
    echo "El resultado es:" . ($numero1*$numero2)  ;
   }
   if(!strcmp("División",$calculo)){
      global $numero1;
      global $numero2; 
    echo "El resultado es:" . ($numero1/$numero2)  ;
   }
   if(!strcmp("Módulo",$calculo)){
      global $numero1;
      global $numero2; 
    echo "El resultado es:" . ($numero1%$numero2)  ;
   }
}
?>

////////////
Variables  /////
////////////
    <?php
      $nombre="abc";
      $edad=18;
    
      print $nombre;
    ?>

  <?php
  print "<br>Esto es un ejemplo: " . $nombre;
  ?>
 
  <?php
   print "<br>Esto es un ejemplo: $nombre " ;
  ?>
  
  <?php
   print "<br>Esto es mi nombre: $nombre y mi edad es $edad <br>" ;
  ?>
 
 <?php
  function dame_datos(){
   echo "Mensaje";
  }
  dame_datos();
  ?>

<!-- https://www.youtube.com/watch?v=wcNXqTkISvg&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=6      -->

<!--/////////////////////////////////////////////////////////////////-->

<!-- Ambito de variables --- LOCAL -- GLOBAL -- SUPERGLOBAL -- -->

<!--/////////////////////////////////////////////////////////////////-->

<?php
 //FEFEFE
 /*
 FEF
 */

global $nombre;
$nombre="abc";
$edad=18;
 print $nombre;
?>
</p>

<p>
 <?php
 
 function incrementarVariable(){
   $contador=0;
   $contador++;
   echo "La variable ha incrementado: $contador";
  }
  incrementarVariable();
  ?>
</p>

<p>
 <?php
  function incrementarVariable(){
    static $contador=0;
    $contador++;
     echo "La variable ha incrementado: $contador";
    }
    incrementarVariable();
  ?>
  </p>

<!--//////////////////////////// STRINGS ////////////////////////////////////////-->
<!--

echo "<p class=\"ejestilocss"\ > Esto es un ekemplo de frase en php con css</p>!;

<?php
  $variable1="Casa";
  $variable2="CASA";
                                         //1=True 0=False    Tiene en cuenta Mayus y Minus
   //$resultado=strcmp($variable1,$variable2);//Devuelve 1 si son diferentes 0 si son iguales.
   
                                                 //1=True 0=False No tiene en cuenta Mayus y Minus.
    $resultado=strcasecmp($variable1,$variable2);//Devuelve 1 si son diferentes 0 si son iguales.
    
    echo "El resultado es : $resultado";
?>

<?php
  $variable1="Casa";
  $variable2="CASA";
                                         //1=True 0=False    Tiene en cuenta Mayus y Minus
   //$resultado=strcmp($variable1,$variable2);//Devuelve 1 si son diferentes 0 si son iguales.

                                             //1=True 0=False No tiene en cuenta Mayus y Minus.
    $resultado=strcasecmp($variable1,$variable2);//Devuelve 1 si son diferentes 0 si son iguales.

   if($resultado){
    echo " El texto comparado : Coincide <br>";
   }
    else{
      echo " El texto comparado : No coincide <br>";
    }
?>






<!--  -->
<div>
</body>
</html>