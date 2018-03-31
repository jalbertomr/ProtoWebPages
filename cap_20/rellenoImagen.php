<?php
/* Primero se crea la base de la pel�cula, como siempre. */
  $pelicula = new SWFMovie();
  $pelicula->setDimension(400, 350);
  $pelicula->setRate(15);
  $pelicula->setBackground(0, 0, 255);

/* Se crea un objeto de l�nea para dibujar el contorno de una forma. */
  $forma = new SWFShape();
  $forma->setLine(5, 255, 255, 0, 255);

/* Se abre un fichero de imagen, se lee y se cierra. */
  $archivo="imagenes/crepusculo.png";
  $manejador=fopen ($archivo, "rb");
  $datosDeImagen=fread($manejador, filesize($archivo));
  fclose ($manejador);

/* Se crea un objeto SWFBitmap con los datos leidos del fichero de imagen. */
  $mapaDeBits = new SWFBitmap ($datosDeImagen);

/* Se define un relleno con la imagen repetida. */
  $relleno=$forma->addFill($mapaDeBits, SWFFILL_TILED_BITMAP);
/* Se asocia el relleno a la l�nea que definir� el contorno. */
  $forma->setLeftFill ($relleno);

/* Se posiciona la pluma en la esquina superior izquierda de la forma a dibujar. */
  $forma->movePenTo(50, 50);
/* Se dibuja la forma hacia la izquierda. */
  $forma->drawLineTo(50, 300);
  $forma->drawLineTo(300, 300);
  $forma->drawLineTo(300, 50);
  $forma->drawLineTo(50, 50);

/* Se a�ade la l�nea, con los cuatro lados dibujados, a la pel�cula. */
  $pelicula->add($forma);

/* Se env�a la pel�cula al navegador. */
  header("Content-type:application/x-shockwave-flash");
  $pelicula->output();
?>
