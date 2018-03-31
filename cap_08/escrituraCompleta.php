<?php
// Se define el salto de línea
	define ("salto","<br>\n");
/* Se abre el archivo para su escritura. Recuerde que,
cuando se intenta abrir un fichero para escritura, si
este no existe, PHP se encaarga de crearlo.*/
	$manejador = fopen("escrituraCompleta.txt","a");
// Se define una cadena.
	$cadena = "Esto es una cadena de texto.";
/* Se intenta escribir la cadena y se comprueba
si ha sido posible.*/
	if (@fwrite($manejador,$cadena)){
		echo ("La cadena se ha escrito en el archivo.");
	} else {
		echo ("NO SE HA PODIDO ESCRIBIR.");
	}
// Se cierra el fichero.
	fclose ($manejador);
?>
