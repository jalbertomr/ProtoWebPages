<?php
  if(!extension_loaded('ming')){
    echo ("La librer�a Ming no se encuentra cargada.<br>");
    if(strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'){
      dl('php_ming.dll') or die("No se pudo cargar la librer�a Ming.");
    } else {
      dl('php_ming.so') or die("No se pudo cargar la librer�a Ming.");
    }
	echo ("La librer�a Ming ha sido cargada din�micamente.");
  } else {
    echo ("La librer�a Ming ya est� cargada previamente.");
  }
?>
