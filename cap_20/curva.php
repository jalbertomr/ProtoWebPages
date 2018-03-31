<?php
/* Se empieza definiendo la base de la pel�cula, como ya es habitual. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(500, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto para definir la curva */
  $curva = new SWFShape();
  $curva ->setLine(10, 255, 0, 0, 255);
  $curva ->movePenTo(50, 300);
/* Se define el punto de control y el de anclaje. */
  $curva ->drawCurveTo(400, 250, 200, 60);

/* Se a�ade la curva a la pel�cula. */
  $pelicula->add($curva);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
