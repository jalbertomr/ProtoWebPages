<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 400);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de línea para dibujar los cuatro lados */
  $ladosDeCuadrado = new SWFShape();
  $ladosDeCuadrado->setLine(3, 255, 255, 0, 255);
  $ladosDeCuadrado->movePenTo(180, 180);
  $ladosDeCuadrado->drawLineTo(180, 220);
  $ladosDeCuadrado->drawLineTo(220, 220);
  $ladosDeCuadrado->drawLineTo(220, 180);
  $ladosDeCuadrado->drawLineTo(180, 180);

/* Se añade la línea, con los cuatro lados dibujados, a la película.
Se crea un manejador de la clase SWFDisplayItem, para poder rotar la figura. */
  $manejadorDeCuadrado=$pelicula->add($ladosDeCuadrado);

/* El bucle determinará la rotación. */
  for ($posicion=0;$posicion<100;$posicion++){
    $pelicula->nextFrame(); // Siguiente fotograma.
    $manejadorDeCuadrado->rotate (10); //Movimiento de la figura.
  }

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
