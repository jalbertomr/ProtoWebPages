<?php
	$cadenaOriginal="Mi mesa es blanca y tu mesa es negra.<br>";
	echo ($cadenaOriginal);
	$cadenaModificada=str_replace("mesa", "silla", $cadenaOriginal);
	echo ($cadenaModificada);
?>
