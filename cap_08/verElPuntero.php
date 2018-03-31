<?php
// Se define el salto de l�nea
	define ("salto","<br>\n");
// Se abre el archivo para su lectura.
	$manejador = fopen("lecturaSimple.txt","r");
// Mientras no se alcance el final del fichero
	while(!feof($manejador)){
// Se lee un caracter.
		$caracter = fgetc($manejador);
// Se obtiene la posici�n del puntero.
		$posicion = ftell($manejador);
/* Se comprueba si se ha leido un car�cter.
Esto se hace para no tratar la marca de final
de fichero como un car�cter.*/
		if ($caracter){
// Se muestra el car�cter y la posici�n que ocupa.
			echo ("El car�cter en la posici�n ");
			echo("<b>$posicion</b> es \"<b>");
			echo("$caracter</b>\"".salto);
		}
	}
// Se cierra el fichero.
	fclose ($manejador);
?>