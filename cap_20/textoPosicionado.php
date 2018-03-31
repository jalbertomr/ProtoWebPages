<?php
/* Se prepara la "base" de la película, como ya es habitual. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 100);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de texto, con una tipografía, color y cadena, como en el ejemplo anterior. */
  $texto_1 = new SWFTextField();
  $fuente = new SWFFont("Verdana");
  $texto_1->setFont ($fuente);
  $texto_1->setColor (255, 255, 0);
  $texto_1->addString ("Hola, mundo.");

/* Se establece la altura de la tipografía (La anchura se auto ajusta para mantener las proporciones). */
  $texto_1->setHeight (20);
/* Se establece un marco para contener el texto. */
  $texto_1->setBounds (150, 80);
/* Se alinea el texto en el marco. */
  $texto_1->align(SWFTEXTFIELD_ALIGN_CENTER);

/* Se añade el objeto de texto a la película. */
  $pelicula->add($texto_1);
/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
