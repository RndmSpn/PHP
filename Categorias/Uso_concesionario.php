<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
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
?>	
	
	



</body>
</html>