<?php
// Se define el salto de l�nea
	define ("salto","<br>\n");
// Se establece el nombre que tendr� el fichero original, y el de la copia.
	$original = "multilinea.txt";
	$copia = "copiado.txt";
// Se intenta copiar y se muestra el resultado.
	if(@copy($original, $copia)){
		echo ("El fichero ha sido copiado.".salto);
	} else {
		echo ("El fichero NO pudo ser copiado.".salto);
	}
?>
