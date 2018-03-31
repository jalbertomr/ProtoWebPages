<?php
/* Primero se crea la base de la película, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(300, 300);
  $pelicula->setRate(30);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un nuevo objeto SWFBitmap con una imagen. */
  $foto = new SWFBitmap (file_get_contents("imagenes/atmosfera.png"));

/* Se añade el objeto de clase SWFBitmap a un sprite y se le da movimiento. */
  $clip = new SWFSprite ();
  $manejadorDeClip = $clip->add ($foto);
  $clip->nextFrame ();
  for ($cambio=1; $cambio<200; $cambio++){
    $manejadorDeClip->move (1, 1);
    $clip->nextFrame ();
  }

/* Se añade el sprite a la película y se posiciona. */
  $manejadorDePelicula = $pelicula->add($clip);
  $manejadorDePelicula->moveTo (0, 0);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
