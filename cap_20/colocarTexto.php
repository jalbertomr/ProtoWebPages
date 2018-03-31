<?php
/* Se prepara la "base" de la película, como ya es habitual. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 100);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de texto, con sus características, como en el ejemplo anterior. */
  $texto_1 = new SWFTextField();
  $fuente = new SWFFont("Verdana");
  $texto_1->setFont ($fuente);
  $texto_1->setColor (255, 255, 0);
  $texto_1->addString ("Hola, mundo.");
  $texto_1->setHeight (20);
  $texto_1->setBounds (150, 80);
  $texto_1->align(SWFTEXTFIELD_ALIGN_CENTER);

/* Se añade el objeto de texto a la película, ALMACENANDO EL RESULTADO EN UN MANEJADOR. */
  $manejadorTexto=$pelicula->add($texto_1);
/* Se mueve el objeto a una posición. */
  $manejadorTexto->moveTo(50,50);
/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
