<?php
  header("Content-type: image/gif");
// Se crea un manejador para una imagen nueva, de 200 píxeles de ancho y 200 de alto.
  $imagen=imagecreate (200, 200);
// Se definen los colores que usaremos.
  $blanco=imagecolorallocate ($imagen, 255, 255, 255); //Color de fondo
  $negro=imagecolorallocate ($imagen, 0, 0, 0);
  $rojo=imagecolorallocate ($imagen, 255, 0, 0);
  $azul=imagecolorallocate ($imagen, 0, 0, 255);
// Ya están los colores en la paleta.
//////////////////////////////////////
// Dibujamos una línea vertical continua.
  imageline ($imagen, 10, 10, 10, 190, $negro);
// Dibujamos una línea vertical discontinua.
  imagedashedline ($imagen, 20, 10, 20, 190, $negro);
// Dibujamos un rectángulo azul hueco.
  imagerectangle ($imagen, 30, 10, 80, 50, $azul);
// Dibujamos un rectángulo azul hueco y lo rellenamos de rojo.
  imagerectangle ($imagen, 30, 70, 80, 110, $azul);
  imagefill ($imagen, 35, 80, $rojo);
// Dibujamos un rectángulo azul relleno.
  imagefilledrectangle ($imagen, 30, 130, 80, 170, $azul);
// Dibujamos una circunferencia negra rellena.
  imagefilledellipse ($imagen, 150, 50, 40, 40, $negro);
// Dibujamos un triángulo azzul relleno.
// Empezamos por crear la matiz donde se almacenan los tres vértices.
  $vertices[0]=150;
  $vertices[1]=100;
  $vertices[2]=180;
  $vertices[3]=180;
  $vertices[4]=120;
  $vertices[5]=180;
// Ahora se dibuja el triángulo.
  imagepolygon ($imagen, $vertices, 3, $azul);
// Se muestra el resultado.
  imagejpeg ($imagen);
// Se liberan recursos.
  imagedestroy($imagen);
?>
