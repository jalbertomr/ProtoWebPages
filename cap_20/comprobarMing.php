<?php
  if(!extension_loaded('ming')){
    echo ("La librería Ming no se encuentra cargada.<br>");
    if(strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'){
      dl('php_ming.dll') or die("No se pudo cargar la librería Ming.");
    } else {
      dl('php_ming.so') or die("No se pudo cargar la librería Ming.");
    }
	echo ("La librería Ming ha sido cargada dinámicamente.");
  } else {
    echo ("La librería Ming ya está cargada previamente.");
  }
?>
