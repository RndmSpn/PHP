<?php
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


?>
</body>
</html>