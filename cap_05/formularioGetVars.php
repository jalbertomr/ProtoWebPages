<?php
	echo ("El valor del campo nombre es: . $nombre.<br>");
	echo ("El valor del campo ciudad es: . $ciudad.<br>");
	echo ("El valor del campo edad es: . $edad.<br>");



	echo ("El valor del campo nombre es: ". $_GET["nombre"]."<br>");
	echo ("El valor del campo ciudad es: ". $_GET["ciudad"]."<br>");
	echo ("El valor del campo edad es: ". $_GET["edad"]."<br>");
	foreach ($_GET as $cve => $valor){
	  echo ("$cve -> $valor <br>");
	}
?>
