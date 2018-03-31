<?php
  header("Content-type: image/gif");
// Se crea un manejador para una imagen nueva, de 320 píxeles de ancho y 220 de alto.
  $imagen=imagecreate (320, 220);
// Se definen los colores que usaremos.
  $blanco=imagecolorallocate ($imagen, 255, 255, 255); //Color de fondo
  $negro=imagecolorallocate ($imagen, 0, 0, 0);
  $rojo=imagecolorallocate ($imagen, 255, 0, 0);
// Ya están los colores en la paleta.
//////////////////////////////////////
// Se dibuja el rótulo vertical de TEMPERATURAS.
  imagestringup ($imagen, 4, 10, 135, "TEMPERATURAS", $negro);
// Se dibujan las graduaciones de las temperaturas.
  imagestring ($imagen, 3, 40, 10, "50", $negro);
  imagestring ($imagen, 3, 40, 30, "40", $negro);
  imagestring ($imagen, 3, 40, 50, "30", $negro);
  imagestring ($imagen, 3, 40, 70, "20", $negro);
  imagestring ($imagen, 3, 40, 90, "10", $negro);
  imagestring ($imagen, 3, 47, 110, "0", $negro);
  imagestring ($imagen, 3, 33, 130, "-10", $negro);
  imagestring ($imagen, 3, 33, 150, "-20", $negro);
// Se dibuja el rótulo horizontal de MESES.
  imagestring ($imagen, 4, 160, 190, "MESES", $negro);
// Se dibujan las iniciales de los meses.
  imagestring ($imagen, 3, 70, 170, "E", $negro);
  imagestring ($imagen, 3, 90, 170, "F", $negro);
  imagestring ($imagen, 3, 110, 170, "M", $negro);
  imagestring ($imagen, 3, 130, 170, "A", $negro);
  imagestring ($imagen, 3, 150, 170, "M", $negro);
  imagestring ($imagen, 3, 170, 170, "J", $negro);
  imagestring ($imagen, 3, 190, 170, "J", $negro);
  imagestring ($imagen, 3, 210, 170, "A", $negro);
  imagestring ($imagen, 3, 230, 170, "S", $negro);
  imagestring ($imagen, 3, 250, 170, "O", $negro);
  imagestring ($imagen, 3, 270, 170, "N", $negro);
  imagestring ($imagen, 3, 290, 170, "D", $negro);
// Se dibujan los once segmentos de línea que forman la gráfica.
  imageline ($imagen, 70, 140, 90, 110,$rojo);
  imageline ($imagen, 90, 110, 110, 90,$rojo);
  imageline ($imagen, 110, 90, 130, 80,$rojo);
  imageline ($imagen, 130, 80, 150, 60,$rojo);
  imageline ($imagen, 150, 60, 170, 60,$rojo);
  imageline ($imagen, 170, 60, 190, 50,$rojo);
  imageline ($imagen, 190, 50, 210, 30,$rojo);
  imageline ($imagen, 210, 30, 230, 50,$rojo);
  imageline ($imagen, 230, 50, 250, 60,$rojo);
  imageline ($imagen, 250, 60, 270, 90,$rojo);
  imageline ($imagen, 270, 90, 290, 110,$rojo);
// Se muestra el resultado.
  imagejpeg ($imagen);
// Se liberan recursos.
  imagedestroy($imagen);
?>
