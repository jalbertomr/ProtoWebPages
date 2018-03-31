<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(300, 300);
  $pelicula->setRate(40);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar los cuatro lados de un cuadrado. */
  $cuadrado = new SWFShape();
  $cuadrado->setLine(5, 255, 255, 0, 255);

/* Se define un relleno de color rojo, sin transparencia. */
  $rellenoRojo=$cuadrado->addFill(255, 0, 0, 255);
/* Se asocia el relleno a la l�nea que definir� el contorno. */
  $cuadrado->setLeftFill ($rellenoRojo);

/* Se posiciona la pluma en la esquina superior izquierda de la forma a dibujar. */
  $cuadrado->movePenTo(-10, -10);
/* Se dibuja la forma hacia la izquierda. */
  $cuadrado->drawLineTo(-10, 10);
  $cuadrado->drawLineTo(10, 10);
  $cuadrado->drawLineTo(10, -10);
  $cuadrado->drawLineTo(-10, -10);

/* Se crea un sprite para alojar la forma. */
  $clip = new SWFSprite();
  $manejadorDeClip = $clip->add($cuadrado);
/* Se crea un escalado mediante un bucle. */
  for ($cambios=1; $cambios<150; $cambios++){
    $clip->nextFrame();
    $manejadorDeClip->scale (1.02, 1.02);
  }

/* Se a�ade el sprite a la pel�cula. */
  $manejadorDePel�cula = $pelicula->add($clip);
  $manejadorDePel�cula->moveTo (150, 150);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
