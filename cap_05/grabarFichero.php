<?php
	$archivoRecibido=$_FILES["fichero"]["tmp_name"];
	echo(var_dump($_FILES["fichero"])."<br>");
	$destino="ficherosSubidos/fotoDelUsuario.jpg";
	move_uploaded_file ($archivoRecibido, $destino);
	echo ("Fichero grabado");
?>
