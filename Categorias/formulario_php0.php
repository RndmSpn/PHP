<!DOCTYPE HTML>
<html >
  

  <head>

     <meta charset="iso-8559-1"/>
     <meta name="description" content="formulario"/>
     <meta name="keywords" content="formulario"/>
  
     <link rel="StyleSheet" href="formularios.css" type="text/css"/>
  
     <title>  PHP </title>

  </head>

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
      
      
  
    </div>

  </body>

</html>