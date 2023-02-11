<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php


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

}
	/*
    if(isset($_POST["enviando"])){

		$nombre=$_POST["nombre_usuario"];
		$contra=$_POST["contra"];
	  
		switch (true){
			
			case $nombre=="Juan" && $contra=="1111" :
	  
				echo "usuario autorizado.Hola Juan" ;
				break;
			
			
			case $nombre=="Juana" && $contra=="2222" :
	  
				echo "usuario autorizado.Hola Juana" ;
				break;
			
	  
			case $nombre=="Juanra" && $contra=="3333" :
	  
				echo "usuario autorizado.Hola Juanra" ;
				break;
			
			default:
			 echo "Usuario No Autorizado" ;
			
	  

		}
	}*/
	/*
	
	if(isset($_POST["enviando"])){
	
	$edad=$_POST["edad_usuario"];
	
	echo $edad<18 ? "Eres menor de edad, No puedes acceder" : "Puedes acceder";
	
	if ($edad<=18){

		echo "Eres menor de edad";
	}else if($edad<=40){

		echo "Eres joven";
	}else if($edad<=65){

		echo "Eres maduro";
	}else{
		echo "Cuidate!!"
	}
	*/


/* if(isset($_POST["enviando"])){

    $nombre=$_POST["nombre_usuario"];
    $contra=$_POST["contra"];
    
   $resultado= $nombre=="Juan" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder" ;
    
	echo $resultado;*/


	
/*switch ($nombre){
        
	case "Juan":

		echo "usuario autorizado.Hola Juan";
		break;
	
	
	case "Juana":

		echo "usuario autorizado.Hola Juana";
		break;
	
	case "Juanra":

		echo "usuario autorizado.Hola Juanra";
		break;
		
	default:
	  echo "usuario no autorizado";*/
?>