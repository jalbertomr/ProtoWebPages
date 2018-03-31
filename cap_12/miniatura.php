<?php
  header("Content-type: image/gif");
// Se crea el manejador de la imagen original.
  $imagenOriginal=imagecreatefromgif ("imagenes/lenguaje.gif");
// Se crea un manejador para una imagen nueva, de 150 píxeles de ancho y 100 de alto.
  $imagenNueva=imagecreatetruecolor (150, 100);
// Se copia la imagen, miaturizada, en la nueva imagen.
   imagecopyresized ($imagenNueva, $imagenOriginal, 0, 0, 0, 0, 150, 100, 300, 200);
// Se muestra el resultado.
  imagegif ($imagenNueva);
// Se liberan recursos.
  imagedestroy($imagenOriginal);
  imagedestroy($imagenNueva);
?>
