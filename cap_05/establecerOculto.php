<?php
   echo ("Con \$_GET <br>");
   echo ("El valor del campo soltero es : " . $_GET["soltero"] . "<br>");
	echo ("El valor del campo oculto es ocultoSoltero:" . $_GET["ocultoSoltero"] . "<br>");
	echo ("El valor del campo oculto es datoOculto: " . $_GET["datoOculto"] . "<br>");

   echo ("Con \$_POST <br>");
   echo ("El valor del campo soltero es : " . $_POST["soltero"] . "<br>");
	echo ("El valor del campo oculto es ocultoSoltero:" . $_POST["ocultoSoltero"] . "<br>");
	echo ("El valor del campo oculto es datoOculto: " . $_POST["datoOculto"] . "<br>");
   echo ("foreach \$_GET <br>");
   foreach ($_GET as $cve => $valor){
     echo ("\$_GET $cve -> $valor <br>");
   }
   echo ("foreach \$_POST <br>");
	foreach ($_POST as $cve => $valor){
	  echo ("\$_POST $cve -> $valor <br>");
	}
?>
