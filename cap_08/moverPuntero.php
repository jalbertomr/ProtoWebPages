<?php
// Se define el salto de l�nea.
	define ("salto","<br>\n");
// Se abre el fichero para lectura.
	$manejadorFichero1 = fopen ("lecturaSimple.txt","r");
// Se lee la mitad del fichero
	$contenido = fread ($manejadorFichero1,14);
// Se muestra la mitad leida.
	echo ("La primera mitad del fichero es: <b>$contenido</b>".salto);
	echo ("Nos vamos a desplazar al primer caracter del fichero.".salto);
// Desplazamos el puntero al cuarto car�cter.
	fseek ($manejadorFichero1, 3);
// leemos el cuarto car�cter y lo mostramos
	echo ("El car�cter correspondiente a la posici�n actual es <b>".fgetc($manejadorFichero1)."</b>".salto);
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>
