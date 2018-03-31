<?php
  header("Content-type: image/jpeg");
// Se crea un manejador para una imagen.
  $imagenJPG=imagecreatefromjpeg ("imagenes/lenguaje.jpg");
// Se envía la imagen al navegador.
  imagejpeg($imagenJPG);
// Se liberan recursos.
  imagedestroy($imagenJPG);
?>
