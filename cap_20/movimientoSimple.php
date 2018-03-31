<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 60);
  $pelicula->setRate(30);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de línea para dibujar los cuatro lados */
  $ladosDeCuadrado = new SWFShape();
  $ladosDeCuadrado->setLine(5, 255, 255, 0, 255);
  $ladosDeCuadrado->movePenTo(5, 5);
  $ladosDeCuadrado->drawLineTo(5, 55);
  $ladosDeCuadrado->drawLineTo(55, 55);
  $ladosDeCuadrado->drawLineTo(55, 5);
  $ladosDeCuadrado->drawLineTo(5, 5);

/* Se añade la línea, con los cuatro lados dibujados, a la película.
Se crea un manejador de la clase SWFDisplayItem, para poder mover la figura. */
  $manejadorDeCuadrado=$pelicula->add($ladosDeCuadrado);

/* El bucle determinará el movimiento. */
  for ($posicion=5;$posicion<340;$posicion+=2){
	  $pelicula->nextFrame(); // Siguiente fotograma.
	  $manejadorDeCuadrado->moveTo ($posicion, 0); //Movimiento de la figura.
  }

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
