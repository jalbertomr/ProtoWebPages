<?php
// Se define el salto de l�nea
	define ("salto","<br>\n");
/*Se intenta eliminar un fichero y se informa del resultado.*/
//	if (@unlink("ficheroParaEliminar.txt")){
	if (@unlink("escrituraCompleta.txt")){			
		echo ("Se ha eliminado el fichero.".salto);
	} else {
		echo ("NO se pudo eliminar el fichero.".salto);
	}
?>
