<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 400);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar los cuatro lados */
  $ladosDeCuadrado = new SWFShape();
  $ladosDeCuadrado->setLine(3, 255, 255, 0, 255);
  $ladosDeCuadrado->movePenTo(180, 180);
  $ladosDeCuadrado->drawLineTo(180, 220);
  $ladosDeCuadrado->drawLineTo(220, 220);
  $ladosDeCuadrado->drawLineTo(220, 180);
  $ladosDeCuadrado->drawLineTo(180, 180);

/* Se a�ade la l�nea, con los cuatro lados dibujados, a la pel�cula.
Se crea un manejador de la clase SWFDisplayItem, para poder rotar la figura. */
  $manejadorDeCuadrado=$pelicula->add($ladosDeCuadrado);

/* El bucle determinar� la rotaci�n. */
  for ($posicion=0;$posicion<100;$posicion++){
    $pelicula->nextFrame(); // Siguiente fotograma.
    $manejadorDeCuadrado->rotate (10); //Movimiento de la figura.
  }

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
