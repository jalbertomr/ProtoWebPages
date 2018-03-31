<?php
  $conexion = mysql_connect("localhost","root","");
  $consulta = "CREATE DATABASE IF NOT EXISTS foros;";
  mysql_query($consulta, $conexion);
  mysql_close ($conexion);
?>
