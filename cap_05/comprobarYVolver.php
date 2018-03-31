<?php
    echo("modificado comprobarYVolver.htm");
	$error=false;
// Se comprueba si el archivo tiene el formato adecuado.
	if ($_FILES["fichero"]["type"]!="image/pjpeg") {
		$error=true;
	}

// Se comprueba que tenga un peso adecuado.
	if ($_FILES["fichero"]["size"] > 200000) {
		$error=true;
	}

// Se comprueba que no se hayan producido errores.
	if ($_FILES["fichero"]["error"] != 0) {
		$error=true;
	}

// Si se ha producido algún error se vuelve al formulario inicial.
	if ($error){
		echo ("<script language='javascript' type='text/javascript'>");
		echo ("location.href='comprobarYVolver.htm';");
		echo ("</script>");
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
