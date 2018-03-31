<?php
  header("Content-type: image/gif");
// Se crea el manejador de la imagen original.
  $imagenOriginal=imagecreatefromgif ("imagenes/lenguaje.gif");
// Se crea un manejador para una imagen nueva, de 720 píxeles de ancho y 110 de alto.
  $imagenNueva=imagecreatetruecolor (721, 110);
// Se copia el fragmento en tres posiciones diferentes de la nueva imagen.
   imagecopy ($imagenNueva, $imagenOriginal, 0, 0, 30, 45, 240, 110);
   imagecopy ($imagenNueva, $imagenOriginal, 240, 0, 30, 45, 240, 110);
   imagecopy ($imagenNueva, $imagenOriginal, 480, 0, 30, 45, 240, 110);
// Se muestra el resultado.
  imagegif ($imagenNueva);
// Se liberan recursos.
  imagedestroy($imagenOriginal);
  imagedestroy($imagenNueva);
?>
