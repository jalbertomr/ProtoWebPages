<?php
/* Se empieza definiendo la base de la película, como ya es habitual. */
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

/* Se añade la curva a la película. */
  $pelicula->add($curva);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
