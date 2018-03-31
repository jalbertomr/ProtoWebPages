<?php
/* Se prepara la "base" de la película, como aprendimos a hacerlo en el script anterior. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(500, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un nuevo objeto de la clase SWFShape, para que contenga una línea. */
  $linea_1 = new SWFShape();
/* Se define el grosor, el color y el factor alfa de la línea. */
  $linea_1->setLine(10, 255, 255, 0, 255);
/* Se define el punto de origen. */
  $linea_1->movePenTo(150, 50);
/* Se define la trayectoria. */
  $linea_1->drawLine(200, 150);

/* Se añade la línea a la película. */
  $pelicula->add($linea_1);

/* Se envía la película al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
