<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 200);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar el contorno de una forma. */
  $forma = new SWFShape();
  $forma->setLine(5, 255, 255, 0, 255);

/* Se crea un objeto de gradiente. */
  $degradado = new SWFGradient();
/* Se le asignan dos colores al degradado. */
  $degradado->addEntry(0.0, 255, 0, 0, 255);
  $degradado->addEntry(0.07, 0, 255, 0, 255);

/* Se define un relleno con el degradado, de forma radial. */
  $relleno=$forma->addFill($degradado, SWFFILL_RADIAL_GRADIENT);
/* Se asocia el relleno a la l�nea que definir� el contorno. */
  $forma->setLeftFill ($relleno);

/* Se posiciona la pluma en la esquina superior izquierda de la forma a dibujar. */
  $forma->movePenTo(-50, -50);
/* Se dibuja la forma hacia la izquierda. */
  $forma->drawLineTo(-50, 50);
  $forma->drawLineTo(50, 50);
  $forma->drawLineTo(50, -50);
  $forma->drawLineTo(-50, -50);

/* Se a�ade la l�nea, con los cuatro lados dibujados, a la pel�cula.
Se incluye un manejador para poder posicionarla. */
  $manejadorDeFigura = $pelicula->add($forma);
  $manejadorDeFigura->moveTo(100, 100);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
