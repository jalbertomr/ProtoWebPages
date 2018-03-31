<?php
// Se establece conexión con el motor de base de datos, y se verifica.
  $conexion=@mysql_connect ("localhost","root","");
  if (!$conexion) die ("NO SE PUDO CONECTAR CON EL MOTOR DE BBDD.");
// Se borra la base de datos si existía previamente.
  $consulta ="DROP DATABASE IF EXISTS iptocountry";
  $hacerConsulta=@mysql_query ($consulta, $conexion);
// Se crea la base de datos.
  $consulta="CREATE DATABASE iptocountry;";
  $hacerConsulta=@mysql_query($consulta, $conexion);
// Se selecciona la base de datos creada.
  @mysql_select_db("iptocountry",$conexion);
// Se crea la tabla de los rangos de IP, y se verifica.
  $consulta="CREATE TABLE ipCountry (ipStart DOUBLE NOT NULL, ipEnd DOUBLE NOT NULL, countryCode2 CHAR(2) NOT NULL default '', countryCode3 CHAR(3) NOT NULL default '', countryName VARCHAR(50) NOT NULL default '', PRIMARY KEY (ipStart, ipEnd)) TYPE=MyISAM;";
  $hacerConsulta=@mysql_query($consulta, $conexion);
  if (!$hacerConsulta) die ("LA TABLA NO PUDO SER CREADA.");
// Se abre el fichero csv de los rangos de IP's.
  $manejadorFichero=fopen("ip-to-country.csv","r");
// Se define una matriz para almacenar los rangos.
  $matriz=array();
/* Mientras haya datos, se lee cada línea y se almacena en un elemento de $matriz.
Cada elemento es, a su vez, una matriz con cinco elementos. */
  while (!feof($manejadorFichero)){
    $matriz[]=fgetcsv($manejadorFichero);
  }
/* Se recorre la matriz y se desglosa cada elemento, para insertar una nueva fila de la tabla. */
  foreach ($matriz as $rangoIPs){
/* Se comprueba que el elemento tenga un contenido real.*/
    if ($rangoIPs[0]!=""){
      $consulta="INSERT INTO ipCountry (ipStart, ipEnd, countryCode2, countryCode3, countryName) VALUES (\"$rangoIPs[0]\", \"$rangoIPs[1]\", \"$rangoIPs[2]\", \"$rangoIPs[3]\", \"$rangoIPs[4]\");";
      $hacerConsulta=mysql_query($consulta, $conexion);
    }
  }
/* Se cierra el fichero CSV y la BBDD.*/
  fclose ($manejadorFichero);
  mysql_close($conexion); 
/* Se muestra el resultado.*/
  echo ("La BBDD y la tabla han sido creadas.<br>");
?>
