<?php
	$cadenaOriginal="IN�S S�NCHEZ es T�cnica en Electr�nica.<br>";
	echo ($cadenaOriginal);
	$cadenaModificada=strtr($cadenaOriginal, "����������", "AEIOUaeiou");
	echo ($cadenaModificada);
?>
