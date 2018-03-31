<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar los cuatro lados. */
  $ladosDeForma = new SWFShape();
  $ladosDeForma->setLine(5, 255, 255, 0, 255);
/* Se posiciona la pluma en la esquina superior izquierda del cuadrado a dibujar. */
  $ladosDeForma->movePenTo(50, 50);
/* Se dibuja el lado izquierdo (una curva). */
  $ladosDeForma->drawCurveTo(200, 130, 50, 300);
/* Se dibuja el lado inferior (una recta). */
  $ladosDeForma->drawLineTo(300, 300);
/* Se dibuja el lado derecho (una curva). */
  $ladosDeForma->drawCurveTo(400, 140, 300, 50);
/* Se dibuja el lado superior (una recta). */
  $ladosDeForma->drawLineTo(50, 50);

/* Se a�ade la l�nea, con los cuatro lados dibujados, a la pel�cula. */
  $pelicula->add($ladosDeForma);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
