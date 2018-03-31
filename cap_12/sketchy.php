<?php
  header("Content-type: image/gif");
// Se crea un manejador para una imagen.
  $imagen = imagecreatefromjpeg("imagenes/lenguaje.jpg");
// Se aplica el filtro de escala de grises.
  imagefilter($imagen, IMG_FILTER_MEAN_REMOVAL);
// Se muestra la imagen.
  imagejpeg ($imagen);
// Se liberan recursos.
  imagedestroy($imagen);
?>  
 