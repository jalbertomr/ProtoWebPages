<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(60, 60);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Creamos cuatro formas, que representarán los estados del botón. */
  $reposo = new SWFShape();
  $activo = new SWFShape();
  $pulsado = new SWFShape();
  $area = new SWFShape();

/* Creamos el botón, en base a las cuatro formas. */
  $boton = new SWFButton ();
  $boton->addShape ($reposo, SWFBUTTON_UP);
  $boton->addShape ($activo, SWFBUTTON_OVER);
  $boton->addShape ($pulsado, SWFBUTTON_DOWN);
  $boton->addShape ($area, SWFBUTTON_HIT);

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

/* Se añade el botón a la película. */
  $manejadorDePelicula=$pelicula->add($boton);
  $manejadorDePelicula->moveTo (30, 30);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
