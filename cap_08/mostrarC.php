<?php
// Se define el salto de l�nea
	define ("salto","<br>\n");
// Se "abre" el directorio principal de la partici�n.
	//$manejador=opendir("C:/");
	$manejador = opendir(".");
	echo ("Contenido del directorio principal:".salto);
// Se "rebobina" el directorio para asegurarnos de posicionarnos al principio.
	rewinddir($manejador);
// Mientras haya elementos (directorios o ficheros) para leer.
	while ($contenido = readdir($manejador)){
		echo ($contenido.salto);
	}
// Se cierra el directorio.
	closedir($manejador);
?>
