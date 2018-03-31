<?php
    echo("\$_POST<br>");
    foreach ($_POST as $cve => $valor){
      echo("$cve -> $valor<br>");
    }
    echo("\$_FILES<br>");
	foreach ($_FILES["fichero"] as $clave => $valor){
		echo ("Propiedad: $clave ---- Valor: $valor<br>");
	}
?>
