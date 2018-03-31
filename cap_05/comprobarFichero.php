<?php
// Dump de la variable "fichero"
   echo( var_dump($_FILES["fichero"])."<br>\n");
// Se comprobando si el archivo tiene el formato adecuado.
    echo("comprobando formato adecuado <br>\n");
	if ($_FILES["fichero"]["type"]!="image/jpeg") {
		die ("El fichero no tiene el formato adecuado.");
	}

// Se comprueba que tenga un peso adecuado.
    echo("comprovando tamaño <= 200000 <br>\n");
	if ($_FILES["fichero"]["size"] > 200000) {
		die ("El fichero es demasiado grande.");
	}

// Se comprueba que no se hayan producido errores.
    echo("comprobando error <br>\n");
	if ($_FILES["fichero"]["error"] != 0) {
		die ("Se ha producido un error.");
	}

// Por último, se intenta grabar y se comprueba si se graba bien.
	$archivoRecibido=$_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/fotoDelUsuario.jpg";
	if (move_uploaded_file ($archivoRecibido, $destino)) {
		echo ("Fichero grabado");
	} else {
		echo ("El fichero no se ha podido grabar.");
	}
?>
