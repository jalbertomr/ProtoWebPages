<?php
/* Se prepara la "base" de la pel�cula, como ya es habitual. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(200, 100);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Creamos un objeto de texto de la clase SWFTextField. */
  $texto_1 = new SWFTextField();
/* Creamos un objeto para la tipograf�a a partir de la clase SWFFont. */
  $fuente = new SWFFont("Verdana");
/* Asociamos la tipograf�a al texto. */
  $texto_1->setFont ($fuente);
/* Establecemos el color del texto. */
  $texto_1->setColor (255, 255, 0);
/* Creamos una cadena para el objeto de texto. */
  $texto_1->addString ("Hola, mundo.");

/* Se a�ade el objeto de texto a la pel�cula. */
  $pelicula->add($texto_1);
/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
