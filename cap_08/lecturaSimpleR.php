<?php
	$manejadorFichero1=fopen ("lecturaSimple.txt","r");
	fpassthru ($manejadorFichero1);
	fclose ($manejadorFichero1);
?>