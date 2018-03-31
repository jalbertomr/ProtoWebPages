<?php
  header("Content-type: image/gif");
// Se crea un manejador para una imagen.
  $imagen=imagecreatefromgif ("imagenes/lenguaje.gif");
// Se obtiene el total de colores de la imagen.
  $coloresTotales=imagecolorstotal($imagen);
// Un bucle recorre cada uno de los colores de la paleta
  for ($cuenta=0; $cuenta<$coloresTotales; $cuenta++){
// Se obtiene una matriz con los colores del indice actual
	  $matriz=imagecolorsforindex ($imagen, $cuenta);
// Se recalculan los valores de los componentes para lograr el tono inverso.
	  $nuevoRojo=255-$matriz["red"];
	  $nuevoVerde=255-$matriz["green"];
	  $nuevoAzul=255-$matriz["blue"];
// Se asignan los nuevos valores al índice en curso.
	  imagecolorset ($imagen, $cuenta, $nuevoRojo, $nuevoVerde, $nuevoAzul);
  }
// Se muestra el resultado.
  imagegif ($imagen);
// Se liberan recursos.
  imagedestroy($imagen);
?>
