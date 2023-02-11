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
   

////////////////////////////////////////
INCLUIR PHP EXTERNO ////////////////////
////////////////////////////////////////

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
    ?>
  </p>
</div>

<div>
////////////////////////////////////////////////
Operadores matematicos  ////////////////////////
////////////////////////////////////////////////

Prioridad operadores matematicos

[] , () , potencia=2 ^ 2 , √ ,  * , / , + , - ,

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




////////////////////////////////////////////////////////////////////////////
////////////////  Variables  ///////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

<div >
  <h1>PHP<h1>
  <p>

    <?php
      $nombre="abc";
      $edad=18;
    
      print $nombre;
    ?>
  </p>
  
  <p>
  <?php
  print "<br>Esto es un ejemplo: " . $nombre;
  ?>
  </p>
  
  <p>
  <?php
   print "<br>Esto es un ejemplo: $nombre " ;
  ?>
  </p>
  
  <p>
  <?php
   print "<br>Esto es mi nombre: $nombre y mi edad es $edad <br>" ;
  ?>
 </p>
 
 <?php
  function dame_datos(){
   echo "Mensaje";
  }
  dame_datos();
  ?>

<!--      -->

<!--/////////////////////////////////////////////////////////////////-->

<!-- Ambito de variables --- LOCAL -- GLOBAL -- SUPERGLOBAL -- -->

 https://www.youtube.com/watch?v=wcNXqTkISvg&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=6
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

//////////////////////////////////////////////////
CASTING EN PHP ( IMPLICITO )  ////////////////////
//////////////////////////////////////////////////

Los tipos de datos son implicitos ( no hay que declarar que tipo de datos es  [ int, float, string , booleano, etc.])

$num1=5; (int)
$num1="5";(string)
$num1=5.5(float)

$resultado=(int)$num1; // Convierte el tipo de dato recibido en (int)

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


////////////////////////////////////////////////////////////////////////////////////////////////////////
/// CONDICIONALES  /////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

////////  IF {}ELSE IF{}ELSE  ////////


if(isset($_POST["enviando"])){

	$edad=$_POST["edad_usuario"];
 
	if ($edad<=18){

		echo "Eres menor de edad";
	}else if($edad<=40){

		echo "Eres joven";
	}else if($edad<=65){

		echo "Eres maduro";
	}else{
		echo "Cuidate!!"
	}

}

///////

if(isset($_POST["enviando"])){

  $nombre=$_POST["nombre_usuario"];
  $contra=$_POST["contra"];
  
  $resultado= $nombre=="Juan" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder" ;
  
  echo $resultado;
}

///////




///// Switch Case /////////
https://www.youtube.com/watch?v=0ttYFIHzBXI&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=17

if(isset($_POST["enviando"])){

  $nombre=$_POST["nombre_usuario"];
  $edad=$_POST["edad"];

  switch ($nombre){
      
      case "Juan":

          echo "usuario autorizado.Hola Juan";
          break;
      
      
      case"Juana":

          echo "usuario autorizado.Hola Juana";
          break;
      

      case"Juanra":

          echo "usuario autorizado.Hola Juanra";
          break;
      
      default:
      echo "usuario no autorizado";
  }
}
/////////////////

if(isset($_POST["enviando"])){

  $nombre=$_POST["nombre_usuario"];
  $contra=$_POST["contra"];

  switch ($nombre){
      
      case $nombre=="Juan" && $contra==="1111":

          echo "usuario autorizado.Hola Juan";
          break;
      
      
      case $nombre=="Juana" && $contra==="2222":

          echo "usuario autorizado.Hola Juana";
          break;
      

      case $nombre=="Juanra" && $contra==="3333":

          echo "usuario autorizado.Hola Juanra";
          break;
      
      default:
      echo "usuario no autorizado";

  }
}
//////////////////

if(isset($_POST["enviando"])){
	$nombre=$_POST["nombre_usuario"];
	$edad=$_POST["edad"];
	
	switch (true):
		
		case $edad>=65:
			echo "Cuidate!!";
		   break;

	   case $edad>=45:
		 echo "Estas a medio camino joven";
		break;

	   case $edad>=18:
	     echo "Eres mayor de edad";
	   break;

      case $edad<=17:
		 echo "Eres menor de edad";
		break;


	endswitch;

/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  OPERADORES TERNARIOS  ////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

    Condicion ? Valor si es verdadero : valor si es falso

if(isset($_POST["enviando"])){

	$edad=$_POST["edad_usuario"];
 
echo $edad<18 ? "Eres menor de edad, No puedes acceder" : "Puedes acceder";



//////////////////////////////////////////////////////////////////////////////////
////  OPERADORES LOGICOS  ////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

https://www.php.net/manual/es/language.operators.precedence.php


&& Y Logico     AND Y Logico
|| O Logico     OR O Logico    XOR O Exclusivo
! Negacion (NOT)

<?php
    $var1=True;
    $var2=False;

    $resultado=$var1 && $var2; //resultado = false;

    if($resultado==True){
      echo "Correcto";
    }else{

      echo "Incorrecto";
    }
?>


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////   BUCLES  /////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

/////// INDETERMINADOS ////////////////////////////

   $var1=1;
   while($var1<6){

    echo "Estamos ejecutando el codigo del bucle<br>";

    $var1++;
  }
  echo "Hemos salido" 

///////////////////////////

$var1=7;

do{

  echo "Estamos ejecutando el codigo del bucle<br>";
  $var1++;
}
while($var1<6);

  echo "Hemos salido";

///////////////////////////////
////////// BUCLE FOR //////////


for (inicio bucle ; incremento/decremento bucle)


https://www.youtube.com/watch?v=qSNq7LWh9jw&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=19

for($i=1;$i<=10;$i++){

  echo "<p>Hemos entrado en el bucle</p>";
?>
//////////////////////////////////

for($i=1;$i<=10;$i++){

  echo "<p>Hemos entrado en el bucle</p>";

  if($i==6){

    echo "<p>Bucle interrumpido</p>";
    break;
  }

}

////////////////////////////////////////

for($i=0;$i<=10;$i++){

  echo"9 x $i = " . 9*$i . "<br>";

}
echo "Hemos salido";

///////////////////////////////

for($i=10;$i>=10;$i--){

  echo"9 : $i = " . 9/$i . "<br>";

}
echo "Hemos salido";

/////////////////////////////////////////

for($i=10;$i>=-10;$i--){

  if($i==0){
    echo "No se puede dividir por 0<br>";
    continue;
  }

echo "9 : $i = " . 9/$i . "<br>";

}
echo "Hemos salido";

////////////////////////////////////////




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////  FUNCIONES  /////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
https://www.youtube.com/watch?v=omyhodE5UW4&t=515s
/////////////////////////////////////////////////////////
FUNCIONES MATEMATICAS  //////////////////////////////////
/////////////////////////////////////////////////////////

https://www.php.net/manual/es/ref.math.php

Numero aleatorio

$num1=rand();
echo $num1;

$num1=542.48973;
echo "El numero es : " . round($num1,2);

<?php
echo max(2, 3, 1, 6, 7);  // 7
echo max(array(2, 4, 5)); // 5

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////// FUNCIONES PREDEFINIDAS DE STRINGS  ////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$palabra="JUAN";
echo (strtolower($palabra));

////////////////////////////////////////////////

function frase_mayus ($frase,$conversion=true){

  $frase=strtolower($frase);

  if($conversion==true){
    
    $resultado=ucwords($frase);

  }else{

    $resultado=strtoupper($frase);

  }return $resultado;
  }
  
  echo (frase_mayus("esto es una prueba"));

///////////////////////////////////////////////////////////
function frase_mayus ($frase,$conversion=true){

  $frase=strtolower($frase);

  if($conversion==true){
    
    $resultado=ucwords($frase);

  }else{

    $resultado=strtoupper($frase);

  }return $resultado;
  }
  
  echo (frase_mayus("esto es una prueba", false));

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  PARAMETROS POR VALOR Y POR REFERENCIA  ///////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
https://www.youtube.com/watch?v=Oq6DGQdvA1s

function incrementa($valor1){

  $valor1++;
  return $valor1;
}
echo incrementa(5)

//////////////

function incrementa($valor1){

  $valor1++;
  return $valor1;
}
$numero=5;
echo incrementa($numero) . "<br>";
echo $numero;

/////

function incrementa($valor1){

  $valor1++;
  return $valor1;
}
$numero=5;
echo incrementa($numero) . "<br>";
echo $numero;

//////////////////////////////////

function cambia_mayus(&$param){

  $param=strtolower($param);
  $param=ucwords($param);
  return $param;
}
$cadena="hOlaA MuNdO";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;

////////////////////////////////////////

function cambia_mayus(&$param){

  $param=strtolower($param);
  $param=ucwords($param);
  return $param;
}
$cadena="hOlaA MuNdO";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;

////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
////////////  POO  PROGRAMACION ORIENTADA A OBJETOS  /////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



class Coche{
  // Propiedades  , Atributos ,  Caracteristicas

    var $ruedas=4;
    var $color="";
    var $motor=1600;

  // Propiedades  , Atributos ,  Caracteristicas

  ///////////////////////////  FUNCIONES / METODOS  //////////////////////////////////////////////////
                //Coche
  function  __construct()(){    //  CONSTRUCTOR  ////  
  //||| FUNCION  constructor  con el mismo nombre que la clase SE ENCARGA DE DARLE UN ESTADO INICIAL  AL OBJETO / INSTANCIA   
    $this->ruedas=4;//this=referencia a la clase
    $this->color="";
    $this->motor=1600;
  }
  function arrancar(){
    echo "Coche arrancado <br>";
  function girar(){  //function == a metodo
                //(cuando esta dntro de una clase)
  function frenar(){
  }
  }
  
  $renault=new Coche(); // INSTANCIAS o EJEMPLARES
  $toyota=new Coche();
  $peugeot=new Coche();
  $micra=new Coche();
  
  $renault->arrancar();
  $renault->establece_color("Amarillo");
  echo $peugeot->ruedas . "&nbsp ruedas";

 ////////
 class Coche{
  var $ruedas;
  function __construct() {
     $this->ruedas=4;
  }
 }
 $toyota=new Coche; 
 echo "El coche Toyota tiene " . $toyota->ruedas;

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 /////////////////////////////////////////////////////////////  HERENCIA /////////////////////////////////////////////

  // Sobreescritura de metodo - - - - - - - - - - - - - - -- 

  

  class Coche{
    /////////////////// Caracteristicas i/o Propiedades
      protected $ruedas; /*private*/
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
    
      function set_color($color_coche,$nombre_coche ){
    
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
    
    class Camion extends Coche{ // Caracteristicas i/o Propiedades
       
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
      
        function set_color($color_camion, $nombre_camion){
      
         $this->color=$color_camion;
         //$this->nombre=$nombre_camion;
      
         echo "El color de este camion &nbsp " . $nombre_camion .  "&nbsp es :&nbsp" . $this->color . "<br>" ;
        }
    }  
    $cam=new Camion();
    /*$cam->establece_color("Amarillo", "Trailer");*/
    


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


/* Modularizacón */
/* https://www.youtube.com/watch?v=I_vUf9WKElU&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=26 */
/* Encapsulacion */
/* Modificaciones de acceso  public , private , */ 
/* https://www.youtube.com/watch?v=GXfooS8Q4aU&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=27 */
/* Funciones SETTER (modificar propiedades de un objeto) y GETTER (acceder/ver estado propiedad de objeto) */

include("condicionalesf.php");

$toyota=new Coche;

echo "El coche tiene &nbsp" . $toyota->get_ruedas() . " &nbsp ruedas <br>";
$cam->set_color("Amarillo", "Trailer");
echo "<br>El coche tiene &nbsp" . $cam->get_ruedas() . " &nbsp ruedas <br>";


/////////

	class Compra_vehiculo{
		
		    private $precio_base;
		
		    private static $ayuda=0;
		
			function __construct($gama){
			
			if($gama=="urbano"){
				
				$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
				$this->precio_base=20000;	
				
			}else if($gama=="berlina"){
				
				$this->precio_base=30000;	
				
			}
		}// fin constructor
		
		static function descuento_gob(){

			if(date("m-d-y")>"12-27-20"){//programar fecha de inicio 
			self::$ayuda=4500;}

		}

		function climatizador(){
			
			$this->precio_base+=2000;
		
		}// fin climatizador
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			else if($color=="beige"){
				
				$this->precio_base+=3500;
			}
			else{
				$this->precio_base+=5000;
			}
		}// fin tapicería
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda;
            return $valor_final;
			
			/*return $this->precio_base*/
       /**/	
      }// fin precio final
  }// fin clase

/////////////////

<!-- /* https://www.youtube.com/watch?v=wBWg5nB2QzE&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=29 

       https://www.youtube.com/watch?v=wBWg5nB2QzE&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=29*/*/ -->

<?php //Campos y Metodos Estaticos

	include("Concesionario.php");

	/*Compra_vehiculo::$ayuda=10000;*/
	Compra_vehiculo::descuento_gob();
	$compra_Antonio=new Compra_vehiculo ("compacto");
	$compra_Antonio->climatizador();
	$compra_Antonio->tapiceria_cuero("blanco");
	echo "Precio total &nbsp" . $compra_Antonio->precio_final() . "<br>";

	$compra_Ana=new Compra_vehiculo("compacto");
	$compra_Ana->climatizador();
	$compra_Ana->tapiceria_cuero("rojo");
	echo "Precio total &nbsp" . $compra_Ana->precio_final();

  ////////////////////////////
  <!-- 
  https://www.youtube.com/watch?v=xPci19sTjek&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=30
-->

<?php 

// Arrays indexados  y  Arrays asocitaivos 

/* Indexado
  
  $semana[]="Lunes";//$semana[0]="";
$semana[]="Martes";//$semana[1]="";
  $semana[]="Miercoles";//$semana[2]="";
   
  $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sàbado","Domingo");
  
  echo "Hoy es " . $semana[5] . "<br>";*/

  /*  Asociativos */

  /*$datos=array("Nombre"=>"Juan", "Apellido"=>"Gomez", "Edad"=>"34");*/
 /* $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sàbado","Domingo");
  arsort ($semana);

  for($i=0;$i<count($semana);$i++){
      echo $semana[$i] . "<br>";
  }
  /* echo $datos ["Apellido"];*/

  // https://www.youtube.com/watch?v=vzt7sdRMs84&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=31&pbjreload=101
  /*
  if(is_array($datos)){// Verificar array
      echo "Es un Array";
  }else{
      echo "No es un array";
  }*/
  
  // Recorrer array
  /*
  foreach ($datos as $clave=>$valor){
      echo " A $clave le corresponde $valor <br>";
  } 
  
  $semana[]="Lunes";//$semana[0]="";
$semana[]="Martes";//$semana[1]="";
  $semana[]="Miercoles";//$semana[2]="";
  $semana[]="Jueves";
  
  for($i=0;$i<4;$i++){
  for($i=0;$i<count($semana);$i++){
      echo $semana[$i] . "<br>";
  }
  */
  // Agregar array
  /*
  //indexado
  $semana[]="Jueves";
  for($i=0;$i<count($semana);$i++){
      echo $semana [$i] . "<br>";
  }
  //array_push para agregar varios elementos
  array_push($semana, "Sabado", "Domingo");
  
  // asociativo  $datos["Pais"]="España";
  //introducir multiples keys a un array asociativo
   $datos=array_merge($datos, array("edad"=>21,"pais"=>"colombia"));
  */
  
  //Ordenar arrays 

  // Indexado
  /*
  $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sàbado","Domingo");
  sort ($semana);
  for($i=0;$i<count($semana);$i++){
      echo $semana[$i] . "<br>";
  }*/
  //Ordenar arrays asoc
  // https://www.linuxhispano.net/2011/05/12/ordenar-arrays-asociativos-en-php-diferencia-entre-ksort-y-asort/

// Arrays Multidimensionales
/* https://www.youtube.com/watch?v=uU9jlYQHGQw&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=32 */

// array 1   nombres asociativos // elementos

//         $alim == Segunda dimension $clave  $valor


$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                               "citrico"=>"mandarina",
                               "otros"=>"manzana"),
          // array 2             $clave      $valor
                "leche"=>array("animal"=>"vaca",
                               "vegetal"=>"coco"),
          // array 3           
                "carne"=>array("vacuno"=>"lomo",
                               "porcino"=>"pata"));
/*echo $alimentos ["carne"] ["vacuno"];*/
//  nom.asoc // elemento

$alimentos=array(
  "Fruta"=>array("tropical"=>"kiwi",
                  "citrico"=>"mandarina",
                  "otros"=>"manzana"),
  "Leche"=>array("animal"=>"vaca",
                  "vegetal"=>"coco"),
  "Carne"=>array("vacuno"=>"lomo","porcino"=>"pata"));

/*print_r($alimentos);*/
//
//var_dump($alimentos);
/*foreach($alimentos as $clave_alim=>$alim){
  
  echo "<br><strong>" . $clave_alim  . "</strong> <br><br>";
  
  foreach($alim as $valor){
      echo $valor .  "<br>";
  }
}*/
// Funciones basicas de arrays
// https://www.guidacode.com/2017/php/arrays-php-funciones-de-array-basicas/
      }
}



///////////////////////////////////////////////////////////////////////////////////////////
///////////// CONECTANDO BASE DE DATOS MYSQL CON PHP //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

https://www.youtube.com/watch?v=awUrlWF38Lc&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=36

<?php

$db_host="localhost";
$db_usuario="ymirfritzjeager";
$db_nombre="pruebas";
$db_contra="duty10460xboxgamer";

/*$conexion=mysqli_connect($db_host, $db_nombre, $db_usuario, $db_contra );
*/
$conexion=mysqli_connect($db_host, $db_usuario,$db_contra , $db_nombre);

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conectado a Pruebas" . "<br>";
// Conectar a base de datos
mysqli_select_db($conexion, $db_nombre) or die (" ERROR al conectar con la base de datos");
// Consulta
$consulta="SELECT * FROM datosusuarios2";
//Hacer consulta , Crea una tabla virtual
$resultados=mysqli_query($conexion, $consulta);
// Busca fila a fila en la tabla v. y devuelve array Indexado
$fila=mysqli_fetch_row($resultados);
//https://www.php.net/manual/es/mysqli-result.fetch-row.php
$fila=mysqli_fetch_array($resultados,MYSQL_ASSOC);
//https://www.php.net/manual/es/mysqli-result.fetch-array.php
//INDEXADO
echo $fila[0] . "<br>";
echo $fila[1] . "<br>";

//ASOCIATIVO
echo $fila['CODIGOARTICUO'] . "<br>";
echo $fila['NOMBREARTICULO'] . "<br>";


mysqli_close($conexion);
//https://www.youtube.com/watch?v=Q98nXcZyVxo&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=37

?>


















/*         NO funcionan

// Listar array multidimiensional asociativo con un while
//                        (Sesgunda dimension) 
//                         <- Por cada $alim  
//             $clave=>$valor<-Desdoblar en  
// Mientars haya elementos en la lista
while (list($clave, $valor)=each($alim)){
       echo "$clave = $valor";
*/
  ?>	


  
<div>
</body>
</html>