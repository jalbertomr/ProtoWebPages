<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 100);
  $pelicula->setRate(30);
  $pelicula->setBackground(0, 0, 255);

/* Creamos cuatro formas, que representarán los estados del botón. */
  $reposo = new SWFShape();
  $activo = new SWFShape();
  $pulsado = new SWFShape();
  $area = new SWFShape();

/* Se cra una instrucción, a partir de la clase SWFAction, para parar la película.
El argumento del constructor es una instrucción de ActionScript aplicada al
objeto "movivmiento", con el que se identificará la película (ver más abajo). */
  $instruccion = new SWFAction ("movimiento.stop();");

/* Creamos el botón, en base a las cuatro formas. */
  $boton = new SWFButton ();
  $boton->addShape ($reposo, SWFBUTTON_UP);
  $boton->addShape ($activo, SWFBUTTON_OVER);
  $boton->addShape ($pulsado, SWFBUTTON_DOWN);
  $boton->addShape ($area, SWFBUTTON_HIT);

/* Le añadimos la instucción anterior al botón, asociada al evento de pulsar. */
  $boton->addAction ($instruccion, SWFBUTTON_MOUSEDOWN);

/* Definimos las cuatro formas, como círculos con diferente color. */
  $reposo->setLine (1,200,100,100,255);
  $relleno=$reposo->addFill (200,100,100);
  $reposo->setRightFill($relleno);
  $reposo->drawCircle (20);
////////////////////////////////////////////////
  $activo->setLine (1,0,100,100,255);
  $relleno=$activo->addFill (0,100,100);
  $activo->setRightFill($relleno);
  $activo->drawCircle (20);
////////////////////////////////////////////////
  $pulsado->setLine (1,0,255,255,255);
  $relleno=$pulsado->addFill (0,255,255);
  $pulsado->setRightFill($relleno);
  $pulsado->drawCircle (20);
////////////////////////////////////////////////
  $area->setLine (1,200,100,100,0);
  $relleno=$area->addFill (200,100,100,0);
  $area->setRightFill($relleno);
  $area->drawCircle (20);

/* Se crea un objeto para que se mueva por la película. */
  $cuadradito = new SWFShape ();
  $cuadradito->setLine (2,255,255,0,255);
  $relleno=$cuadradito->addFill (255,255,0);
  $cuadradito->setRightFill ($relleno);
  $cuadradito->movePenTo (-15, 15);
  $cuadradito->drawLineTo (15, 15);
  $cuadradito->drawLineTo (15, -15);
  $cuadradito->drawLineTo (-15, -15);
  $cuadradito->drawLineTo (-15, 15);

/* Se añade el botón a la película. */
  $manejadorDePelicula=$pelicula->add($boton);
  $manejadorDePelicula->moveTo (30, 30);
/* Se añade el cuadradito a la pelicula. */
  $manejadorDeClip=$pelicula->add ($cuadradito);
  $manejadorDeClip->moveTo (20,80);
/* Se le asigna un identificador al cuadradito en la pelicula, para poder
asignarle luego la instrucción de ActionScript que se creó anteriormente. */
  $manejadorDeClip->setName("movimiento");
/* El movimiento del cuadradito, a través de una trayectoria horizontal. */
  for ($contador=0; $contador<160; $contador++){
    $pelicula->nextFrame();
    $manejadorDeClip->move (1,0);
  }

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
