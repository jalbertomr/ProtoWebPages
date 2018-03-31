<?php
// Se define el salto de línea.
	define ("salto","<br>\n");
// Se abre el fichero para lectura.
	$manejadorFichero1 = fopen ("lecturaSimple.txt","r");
/* Se leen doce caracteres. El puntero de lectura queda
posicionado para leer a partir del carácter 13. */
	$bloque = fread ($manejadorFichero1, 12);
	echo ("Los doce primeros caracteres del fichero son: <b>$bloque");
/* Se leen otros doce caracteres. El puntero de lectura
queda posicionado para leer a partir del carácter 25. */
	$bloque = fread ($manejadorFichero1, 12);
	echo ("</b>".salto."El siguiente bloque de doce caracteres es: <b>$bloque");
/* Se intentar leer otros doce caracteres, pero se alcanza
la marca EOF, con lo que se detiene la lectura antes. */
	$bloque = fread ($manejadorFichero1, 12);
	echo ("</b>".salto."El siguiente bloque es: <b>$bloque");
	echo ("</b>".salto."Si queremos volver a leer hay que \"rebobinar\".");
/* Se rebobina el puntero de lectura, que vuelve a
quedar apuntando al prime caracter. */
	rewind ($manejadorFichero1);
/* Se vuelve a leer el primer bloque de caracteres para
confirma que el puntero ha quedado al principio. */
	$bloque=fread ($manejadorFichero1, 12);
	echo ("</b>".salto."Volvemos a leer el primer bloque de doce caracteres: <b>$bloque");
	echo ("</b>".salto);
// Se cierra el fichero
	fclose ($manejadorFichero1);
?>