<?php
/* Creamos un nuevo objeto de la clase SWFMovie. */
  $pelicula = new SWFMovie();
/* Establecemos las dimensiones de la pel�cula. */
  $pelicula->setDimension(400, 300);
/* Establecemos la velocidad de reproducci�n. */
  $pelicula->setRate(15);
/* Establecemos el color de fondo. */
  $pelicula->setBackground(0, 0, 255);
/* Le indicamos al navegador el tipo de contenidos. */
  header("Content-type:application/x-shockwave-flash");
/* Enviamos la pel�cula al navegador. */
  $pelicula->output();
?>
