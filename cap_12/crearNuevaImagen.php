<?php
  header("Content-type: image/gif");
// Se crea un manejador para una imagen nueva, de 400 píxeles de ancho y 100 de alto.
  $imagen=imagecreatetruecolor (400, 100);
// Se definen los colores que usaremos.
  $color[0]=imagecolorallocate ($imagen, 0, 0, 0); //Color negro
  $color[1]=imagecolorallocate ($imagen, 255, 255, 255); //Color blanco
  $color[2]=imagecolorallocate ($imagen, 255, 0, 0);  //Color rojo
  $color[3]=imagecolorallocate ($imagen, 0, 255, 0);  //Color verde
  $color[4]=imagecolorallocate ($imagen, 0, 0, 255);  //Color azul
  $color[5]=imagecolorallocate ($imagen, 255, 255, 0);  //Color amarillo
  $color[6]=imagecolorallocate ($imagen, 255, 0, 255);  //Color morado
  $color[7]=imagecolorallocate ($imagen, 0, 255, 255);  //Color cyan
  $color[8]=imagecolorallocate ($imagen, 127, 127, 127);  //Color gris
  $color[9]=imagecolorallocate ($imagen, 255, 100, 255);  //Color rosa
// Ya están los colores en la paleta.
//////////////////////////////////////
// Se recorren todos los píxeles de la nueva imagen, asignándoles colores de la paleta.
  for ($y=0; $y<100; $y++){
	  for ($x=0; $x<400; $x++){
		  $indiceDeColor=floor($y/10);
		  imagesetpixel ($imagen, $x, $y, $color[$indiceDeColor]);
	  }
  }
// Se graba la imagen en un archivo de disco.
  imagegif ($imagen, "imagenes/bandera.gif");
// Se muestra el resultado.
  imagegif ($imagen);
// Se liberan recursos.
  imagedestroy($imagen);
?>
