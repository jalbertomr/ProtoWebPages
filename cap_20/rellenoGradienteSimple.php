<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de línea para dibujar el contorno de una forma. */
  $forma = new SWFShape();
  $forma->setLine(5, 255, 255, 0, 255);

/* Se crea un objeto de gradiente. */
  $degradado = new SWFGradient();
/* Se le asignan dos colores al degradado: uno al principio del mismo y otro a la mitad. */
  $degradado->addEntry(0.0, 255, 0, 0, 255);
  $degradado->addEntry(0.5, 0, 255, 0, 255);

/* Se define un relleno con el degradado, de forma radial. */
  $relleno=$forma->addFill($degradado, SWFFILL_RADIAL_GRADIENT);
/* Se asocia el relleno a la línea que definirá el contorno. */
  $forma->setLeftFill ($relleno);

/* Se posiciona la pluma en la esquina superior izquierda de la forma a dibujar. */
  $forma->movePenTo(50, 50);
/* Se dibuja la forma hacia la izquierda. */
  $forma->drawLineTo(50, 300);
  $forma->drawLineTo(300, 300);
  $forma->drawLineTo(300, 50);
  $forma->drawLineTo(50, 50);

/* Se añade la línea, con los cuatro lados dibujados, a la película. */
  $pelicula->add($forma);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
