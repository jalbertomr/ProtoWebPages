<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 100);
  $pelicula->setRate(30);
  $pelicula->setBackground(0, 0, 255);

/* Creamos cuatro formas, que representar�n los estados del bot�n. */
  $reposo = new SWFShape();
  $activo = new SWFShape();
  $pulsado = new SWFShape();
  $area = new SWFShape();

/* Se cra una instrucci�n, a partir de la clase SWFAction, para parar la pel�cula.
El argumento del constructor es una instrucci�n de ActionScript aplicada al
objeto "movivmiento", con el que se identificar� la pel�cula (ver m�s abajo). */
  $instruccion = new SWFAction ("movimiento.stop();");

/* Creamos el bot�n, en base a las cuatro formas. */
  $boton = new SWFButton ();
  $boton->addShape ($reposo, SWFBUTTON_UP);
  $boton->addShape ($activo, SWFBUTTON_OVER);
  $boton->addShape ($pulsado, SWFBUTTON_DOWN);
  $boton->addShape ($area, SWFBUTTON_HIT);

/* Le a�adimos la instucci�n anterior al bot�n, asociada al evento de pulsar. */
  $boton->addAction ($instruccion, SWFBUTTON_MOUSEDOWN);

/* Definimos las cuatro formas, como c�rculos con diferente color. */
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

/* Se crea un objeto para que se mueva por la pel�cula. */
  $cuadradito = new SWFShape ();
  $cuadradito->setLine (2,255,255,0,255);
  $relleno=$cuadradito->addFill (255,255,0);
  $cuadradito->setRightFill ($relleno);
  $cuadradito->movePenTo (-15, 15);
  $cuadradito->drawLineTo (15, 15);
  $cuadradito->drawLineTo (15, -15);
  $cuadradito->drawLineTo (-15, -15);
  $cuadradito->drawLineTo (-15, 15);

/* Se a�ade el bot�n a la pel�cula. */
  $manejadorDePelicula=$pelicula->add($boton);
  $manejadorDePelicula->moveTo (30, 30);
/* Se a�ade el cuadradito a la pelicula. */
  $manejadorDeClip=$pelicula->add ($cuadradito);
  $manejadorDeClip->moveTo (20,80);
/* Se le asigna un identificador al cuadradito en la pelicula, para poder
asignarle luego la instrucci�n de ActionScript que se cre� anteriormente. */
  $manejadorDeClip->setName("movimiento");
/* El movimiento del cuadradito, a trav�s de una trayectoria horizontal. */
  for ($contador=0; $contador<160; $contador++){
    $pelicula->nextFrame();
    $manejadorDeClip->move (1,0);
  }

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
