<?php
	$cadenaOriginal="INÉS SÁNCHEZ es Técnica en Electrónica.<br>";
	echo ($cadenaOriginal);
	$cadenaModificada=strtr($cadenaOriginal, "ÁÉÍÓÚáéíóú", "AEIOUaeiou");
	echo ($cadenaModificada);
?>
