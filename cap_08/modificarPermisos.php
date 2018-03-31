<?php
	define ("salto","<br>\n");
/* Se eliminan las barras sobrantes que se han producido durante la tansmisión del nombre del fichero (ver capítulo 7).*/
	$_POST["ocultoNombre"] = ereg_replace("\\\\\\\\", "/", $_POST["ocultoNombre"]);
// Los niveles de permisos no pueden ser una cadena.
	$permisosOtorgados=octdec($_POST["ocultoPermisos"]);
// Se intentan cambiar los permisos y se verifica si ha sido posible.
	if (@chmod($_POST["ocultoNombre"], $permisosOtorgados)){
		echo ("Los permisos han sido cambiados satisfactoriamente.".salto);
		echo ("El archivo ".$_POST["ocultoNombre"]);
		echo (" tiene ahora los permisos ".$_POST["ocultoPermisos"].salto);
	} else {
		echo ("LOS PERMISOS NO PUDIERON CAMBIARSE.".salto);
	}
?>
<html>
<body>
<!-- Un botón para volver -->
	<button onClick="location.href='permisos.htm';">
	REGRESAR
	</button>
</body>
</html>
