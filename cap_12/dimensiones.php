<?php
  define("salto","<br>\n");
// Se crea un manejador para una imagen.
  $imagenJPG=imagecreatefromjpeg ("imagenes/lenguaje.jpg");
// Se muestran la anchura y la altura.
  echo (salto."Anchura de la imagen: ".imagesx($imagenJPG));
  echo (salto."Altura de la imagen: ".imagesy($imagenJPG).salto);
// Se liberan recursos.
  imagedestroy($imagenJPG);
?>
