<?php
// Se define el salto de l�nea.
	define ("salto","<br>\n");
// Se determina el tama�o del fichero.
	$caracteres = filesize ("lecturaSimple.txt");
// Se abre el fichero para lectura.
	$manejadorFichero1 = fopen ("lecturaSimple.txt","r");
// Se lee el fichero caracter a caracter
	$contenido = "";
	for ($contador = 1; $contador <= $caracteres; $contador++){
		$contenido.=fgetc($manejadorFichero1);
	}
// Se muestra todo el contenido.
	echo ("El contenido del fichero es: <b>$contenido</b>".salto);
// Se muestra el tama�o del fichero.
	echo ("El total de caracteres es de: <b>$caracteres</b>");
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>