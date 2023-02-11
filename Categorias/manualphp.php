<html>

<head></head>

<header><header>

<body>

<div >
  <h1>PHP<h1>
  <p> 
  <?php
    
// COMENTARIOS // 
 // PHP
 /*
 PHP
 */    
    Ejecucion del Lado del Cliente  Javascript --- VBSript --- Applets Java --- HTML --- CSS ---
    
    Ejecucion del Lado del Servidor Crea conexion en la based de datos, devuelve html
    Lenguajes del lado del servidor--- PHP --- JSP --- PERL --- ASP ---
    
    SOFTWARE  --> Apache , PHP , MySQL 
   
////////////////////////////
/////  INCLUIR PHP EXTERNO ////
////////////////////////////

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


/////////////////////////////// Operadores de Comparacion //////////////////////////////////////////////////////////////////////////   
        
        <h1>USANDO OPERADORES COMPARACIÓN</h1>
        
        <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
          <table width="15%" align="center">
            
            <tr>
              <td>Nombre:</td>
              <td><label for="nombre_usuario"></label>
              <input type="text" name="nombre_usuario" id="nombre_usuario" ></td>
            </tr>
            
            <tr>
              <td>Edad:</td>
              <td><label for="edad_usuario"></label>
              <input type="text" name="edad_usuario" id="edad_usuario" ></td>
            </tr>
            
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar" ></td>
            </tr>
        </table>
        </form>
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////// Formulario ////////////////////////

<body id="tabla" >
    
    
    <div>
      
      
      <form id="tabla" action="" method="post" name="datos_usuario" >
        
        <h1>Operadores de comparacion</h1>
     
        <table id="tabla" >
          
          <caption>Informacion de usuario</caption>
        
          <tr>
            <td > Nombre : </td>
            <td ><label for="nombre_usuario"></label>
              <input type="text" name="nombre_usuario" id="nombre_usuario">
            </td>
          </tr>
        
          <tr>
            <td> Edad : </td>
            <td><label for="edad_usuario"></label>
              <input type="text" name="edad_usuario" id="edad_usuario">
            </td>
          </tr>
        
          <tr>
            <td colspan="2" >
              <input type="submit" name="enviando" id="enviando" value="Enviar">
            </td>
          </tr>

          </table>
      
      
        </form>
        
        <?php

            if(isset($_POST["enviando"])){

               $usuario=$_POST["nombre_usuario"];
              
               $edad=$_POST["edad_usuario"];

               if($usuario=="Juan"){

                 echo "<p>Puedes entrar</p>";
               
                }else{

                  echo "<p>No puedes entrar</p>";
                }
            }
        ?>


    </p>
    </h1>
  <div>
</body>

</html>