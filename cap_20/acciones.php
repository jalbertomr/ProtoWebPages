<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(300, 30);
  $pelicula->setRate(40);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de la clase SWFAction, para contener una instrucción de ActionScript. */
  $instruccion = new SWFAction ("stop();");

/* Se crea un objeto que será un cuadrado de contorno amarillo sin relleno. */
  $cuadrado_1 = new SWFShape();
  $cuadrado_1->setLine(3, 255, 255, 0, 255);
  $cuadrado_1->movePenTo(-10, -10);
  $cuadrado_1->drawLineTo(-10, 10);
  $cuadrado_1->drawLineTo(10, 10);
  $cuadrado_1->drawLineTo(10, -10);
  $cuadrado_1->drawLineTo(-10, -10);

/* Se crea otro objeto: un cuadrado de contorno verde sin relleno. */
  $cuadrado_2 = new SWFShape();
  $cuadrado_2->setLine(3, 0, 255, 0, 255);
  $cuadrado_2->movePenTo(-10, -10);
  $cuadrado_2->drawLineTo(-10, 10);
  $cuadrado_2->drawLineTo(10, 10);
  $cuadrado_2->drawLineTo(10, -10);
  $cuadrado_2->drawLineTo(-10, -10);

/* Se crea un sprite para alojar el cuadrado amarillo. */
  $clip_1 = new SWFSprite();
  $manejadorDeClip_1 = $clip_1->add($cuadrado_1);
  $clip_1->nextFrame();

/* Se crea un sprite para alojar el cuadrado verde. */
  $clip_2 = new SWFSprite();
  $manejadorDeClip_2 = $clip_2->add($cuadrado_2);
  $clip_2->nextFrame();

/* Se añaden los sprites a la película y se colocan en sus posiciones iniciales. */
  $manejadorDeForma_2 = $pelicula->add($clip_2);
  $manejadorDeForma_1 = $pelicula->add($clip_1);
  $manejadorDeForma_1->moveTo (15, 15);
  $manejadorDeForma_2->moveTo (150, 15);

/* Se crea un bucle que desplaza el sprite del cuadrado amarillo por la película. */
  for ($desplazamiento=1; $desplazamiento<276; $desplazamiento++){
    $manejadorDeForma_1->move(1,0);
/* En el momento de alcanzar la posición del recuadro verde, este desaparece (es eliminado). */
	if ($desplazamiento==136) $pelicula->remove($manejadorDeForma_2);
    $pelicula->nextFrame();
  }

/* Se carga la instrucción en la película. */
  $pelicula->add($instruccion);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
