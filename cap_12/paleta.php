<?php
define ("salto", "<br>\n");
// Se crea un manejador para una imagen.
  $imagen=imagecreatefromgif ("imagenes/lenguaje.gif");
// Se obtiene el total de colores de la imagen.
  $coloresTotales=imagecolorstotal($imagen);
// Se muestra el total de colores de la imagen.
  echo ("La imagen imagenes/lenguaje.gif tiene un total de $coloresTotales colores.".salto);
// Se inicia la tabla de colores.
  echo ("<table width='480' border='2' cellpadding='0' cellspacing='0'>");
  echo ("<tr><td>Indice</td><td>Rojo</td><td>Verde</td>");
  echo ("<td>Azul</td><td>Alfa</td><td>Color</td></tr>");
// Un bucle recorre cada uno de los colores de la paleta
  for ($cuenta=0; $cuenta<$coloresTotales; $cuenta++){
//Se muestra el número de índice en la paleta.
    echo ("<tr align='center'><td>".$cuenta."</td>");
// Se obtiene la matriz con los cuatro valores del color del índice actual.
    $matriz=imagecolorsforindex ($imagen,$cuenta);
// Se va a calcular la expresión hexadecimal del color actual.
    $valorHexa="#";
// Se recorre toda la matriz del color actual.
    foreach ($matriz as $clave=>$valor){
// Se muestra el valor del componente que estamos viendo.
      echo ("<td>".$valor."</td>");
// Si es el componente rojo, verde o azul se añade el valor hexadecimal.
      if ($clave=="red" || $clave=="green" || $clave=="blue"){
        if ($valor<16){
// Si tiene menos de dos dígitos hexa, se antepone un cero.
          $valorHexa.=("0".dechex($valor));
        } else {
          $valorHexa.=dechex($valor);
        }
      }
    }
// Se muestra una celda con el color actual de fondo.
    echo ("<td bgcolor=\"$valorHexa\">&nbsp;</td>");
    echo ("</tr>");
  }
  echo ("</table>");
// Se liberan recursos.
  imagedestroy($imagen);
?>
