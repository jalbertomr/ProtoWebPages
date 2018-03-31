<?php
  define ("salto","\n<br>");
// Se intenta conectar con el motor de MySQL
  $conectado = @mysql_connect ("localhost","root","");
  if ($conectado){
    echo ("SE HA CONECTADO AL SERVIDOR MySQL.".salto);
  } else {
// Si la conexión falla, se avisa de ello y se interrumpe la ejecución.
    die ("NO SE PUDO CONECTAR AL SERVIDOR MySQL.");
  }
// Se forma la consulta para crear la BBDD.
// Como ve, se alamacena en una cadena
  $consulta="CREATE DATABASE IF NOT EXISTS gestion;";
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query ($consulta, $conectado);
?>
