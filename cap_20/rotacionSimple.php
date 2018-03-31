<?php
/* Se crea la base de la pel�cula. */
  $peliculaPrincipal = new SWFMovie();
  $peliculaPrincipal->setBackground(0, 100, 255);
  $peliculaPrincipal->setDimension(200, 200);
  $peliculaPrincipal->setRate(30);

/* Se crea un cuadrado de bordes negros y relleno rojo. */
  $cuadrado = new SWFShape();
  $cuadrado->setLine(2, 0, 0, 0, 255);
  $relleno = $cuadrado->addFill(255, 0, 0);
  $cuadrado->setRightFill($relleno);
  $cuadrado->movePenTo(-50, -50);
  $cuadrado->drawLineTo(50, -50);
  $cuadrado->drawLineTo(50, 50);
  $cuadrado->drawLineTo(-50, 50);
  $cuadrado->drawLineTo(-50, -50);

/* Se crea un miniclip que contendr� el cuadrado. */
  $clip = new SWFSprite();
/* Se a�ade el cuadrado al miniclip, generando un manejador que es un objeto de la clase SWFDisplayItem. */
  $manejadorDeClip = $clip->add($cuadrado);
/* Por medio del manejador se hace que el cuadrado gire en el miniclip. */
  for ($pasos=0; $pasos<9; $pasos++){
    $clip->nextFrame();
    $manejadorDeClip->rotate(-10);
  }

/* Se a�ade el miniclip a la pel�cula principal. */
  $manejadorEnPeliculaPrincipal = $peliculaPrincipal->add($clip);
/* Se sit�a el miniclip en el centro del lienzo. */
  $manejadorEnPeliculaPrincipal->moveTo(100, 100);

  header('Content-type: application/x-shockwave-flash');
  $peliculaPrincipal->output();
?>
