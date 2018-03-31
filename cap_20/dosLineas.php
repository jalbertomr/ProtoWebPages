<?php
/* Se prepara la "base" de la película, como aprendimos a hacerlo en el script anterior. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(500, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea una línea, como aprendimos a hacerlo en el script anterior. */
  $linea_1 = new SWFShape();
  $linea_1->setLine(50, 255, 255, 0, 255); //Ancho, 50, para que se vea bien.
  $linea_1->movePenTo(150, 50);
  $linea_1->drawLine(200, 150);

/* Se crea otra línea. */  
  $linea_2 = new SWFShape();
  $linea_2->setLine(50, 255, 0, 0, 127); //Alfa=127 (semitransparente).
  $linea_2->movePenTo(450, 50);
  $linea_2->drawLineTo(150, 300); //Uso de drawLineTo ().

/* Se añaden las líneas a la película. */
  $pelicula->add($linea_1);
  $pelicula->add($linea_2);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
