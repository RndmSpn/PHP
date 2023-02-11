<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
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

foreach($alimentos as $clave_alim=>$alim){
     echo "$clave_alim : <br>";
while (list($clave, $valor)=each($alim)){
         echo "$clave = $valor";
        }
}
      
?>	
</body>
</html>