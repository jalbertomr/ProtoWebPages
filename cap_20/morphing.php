<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(300, 300);
  $pelicula->setRate(30);
  $pelicula->setBackground(0, 0, 255);

/* Se crean dos formas: una será un cuadrado y la otra un rectángulo. */
  $cuadrado = new SWFShape();
  $rectangulo = new SWFShape();

/* Se crea un objeto de interpolación de forma. */
  $interpolacion = new SWFMorph ();
/* Se asignan las dos shapes a las formas de la interpolación */
  $cuadrado = $interpolacion->getShape1 ();
  $rectangulo = $interpolacion->getShape2 ();

/* Se construye el cuadrado. */
  $cuadrado->setLine(3, 255, 255, 0, 255);
  $cuadrado->movePenTo(-30, -30);
  $cuadrado->drawLineTo(30, -30);
  $cuadrado->drawLineTo(30, 30);
  $cuadrado->drawLineTo(-30, 30);
  $cuadrado->drawLineTo(-30, -30);

/* Se construye el rectángulo. */
  $rectangulo->setLine(3, 0, 255, 0, 255);
  $rectangulo->movePenTo(-80, -15);
  $rectangulo->drawLineTo(80, -15);
  $rectangulo->drawLineTo(80, 15);
  $rectangulo->drawLineTo(-80, 15);
  $rectangulo->drawLineTo(-80, -15);

/* Se crea un sprite y se le añade la interpolación */
  $clip= new SWFSprite();
  $manejadorDeClip=$clip->add($interpolacion);
  $clip->nextFrame();
/* Se crea un bucle que ejecuta la interpolación. */
  for ($cambio=0.0; $cambio<=1.0; $cambio+=0.02){
    $manejadorDeClip->setRatio ($cambio);
    $clip->nextFrame ();
  }

/* Se añade el sprite a la película y se coloca en el centro. */
  $manejadorDePelicula = $pelicula->add($clip);
  $manejadorDePelicula->moveTo (150, 150);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
