<?php
   echo ("\$HTTP_POST_VARS <br>");
   echo ("gettype(\$GLOBALS):".gettype($GLOBALS)."<br>");
   echo ("gettype(\$HTTP_POST_VARS):".gettype($HTTP_POST_VARS)."<br>");
   echo ("\$HTTP_POST_VARS):".$HTTP_POST_VARS["nombre"]."<br>");
   echo ("\$_POST['nombre']):".$_POST["nombre"]."<br>");
	echo ("El nombre tecleado es:".$_POST['nombre']."<br>");
	echo ("El estado soltero es:".$_POST['soltero']."<br>");
	echo ("Su rango de edad es:".$_POST['edad']."<br>");
	echo ("El campo oculto vale:".$_POST['datoOculto']."<br>");
	foreach( $HTTP_POST_VARS as $cve => $valor){
	  echo("$cve -> '$valor' DUMP: ".var_dump($valor)." <br>");
	}
	echo(" \$GLOBALS <br>");
	foreach( $GLOBALS as $cve => $valor){
	  echo("$cve -> '$valor' DUMP: ".var_dump($valor)." <br>");
	}
?>
