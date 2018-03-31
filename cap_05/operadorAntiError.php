<html>
	<head>
		<script language='javascript' type='text/javascript'>
			function volver() {
				location.href='operadorAntiError.htm';
			}
		</script>
	</head>
	<body>
<?php
	$error=false;
// Se comprueba si el archivo tiene el formato adecuado.
	if ($_FILES["fichero"]["type"]!="image/pjpeg") {
		echo ("El archivo no está en el formato adecuado.<br>");
		$error=true;
	}

// Se comprueba que tenga un peso adecuado.
	if ($_FILES["fichero"]["size"] > 200000) {
		echo ("El archivo es demasiado grande.<br>");
		$error=true;
	}

// Se comprueba que no se hayan producido errores.
	if ($_FILES["fichero"]["error"] != 0) {
		echo ("Hay un error en el archivo.<br>");
		$error=true;
	}

// Si se ha producido algún error se vuelve al formulario inicial.
	if ($error){
		echo ("<input type='button' name='retorno' id='retorno' value='VOLVER' onClick='javascript:volver();';");
	} else {
// Por último, se intenta grabar y se comprueba si se graba bien.
		$archivoRecibido=$_FILES["fichero"]["tmp_name"];
		$destino="ficherosEnviados/fotoDelUsuario.jpg";
		if (@move_uploaded_file ($archivoRecibido, $destino)) {
			echo ("Fichero grabado");
		} else {
			echo ("El fichero no se ha podido grabar.");
		}
	}
?>
	</body>
</html>