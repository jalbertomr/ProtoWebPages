<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar los cuatro lados de un cuadrado. */
  $cuadrado = new SWFShape();
  $cuadrado->setLine(5, 255, 255, 0, 255);

/* Se define un relleno de color rojo, sin transparencia. */
  $rellenoRojo=$cuadrado->addFill(255, 0, 0, 255);
/* Se asocia el relleno a la l�nea que definir� el contorno. */
  $cuadrado->setLeftFill ($rellenoRojo);

/* Se posiciona la pluma en la esquina superior izquierda del cuadrado a dibujar. */
  $cuadrado->movePenTo(50, 50);
  $cuadrado->drawLineTo(50, 300);
  $cuadrado->drawLineTo(300, 300);
  $cuadrado->drawLineTo(300, 50);
  $cuadrado->drawLineTo(50, 50);

/* Se a�ade la l�nea, con los cuatro lados dibujados, a la pel�cula. */
  $pelicula->add($cuadrado);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
