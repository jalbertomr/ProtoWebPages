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

/* Se posiciona la pluma en la esquina superior izquierda del primer cuadrado a dibujar. */
  $cuadrado->movePenTo(50, 50);
  $cuadrado->drawLineTo(50, 150);
  $cuadrado->drawLineTo(150, 150);
  $cuadrado->drawLineTo(150, 50);
  $cuadrado->drawLineTo(50, 50);

/* Se posiciona la pluma en la esquina superior izquierda del segundo cuadrado a dibujar. */
  $cuadrado->movePenTo(200, 200);
  $cuadrado->drawLineTo(200, 300);
  $cuadrado->drawLineTo(300, 300);
  $cuadrado->drawLineTo(300, 200);
  $cuadrado->drawLineTo(200, 200);

/* Se a�ade la l�nea, con los dos cuadrados dibujados, a la pel�cula. */
  $pelicula->add($cuadrado);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
