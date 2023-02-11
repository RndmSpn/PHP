<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php 

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
?>	

</body>
</html>