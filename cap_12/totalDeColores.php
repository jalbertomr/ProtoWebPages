<?php
// Se crea un manejador para una imagen.
  $imagen=imagecreatefromgif ("imagenes/lenguaje.gif");
// Se obtiene el total de colores de la imagen.
  $coloresTotales=imagecolorstotal($imagen);
// Se muestra el resultado.
  echo ("La imagen imagenes/lenguaje.gif tiene un total de $coloresTotales colores.");
// Se liberan recursos.
  imagedestroy($imagen);
?>
