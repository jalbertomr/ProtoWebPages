<?php
  require_once('login.php');
  $db_server=mysql_connect($db_hostname, $db_username, $db_password);
  
  if(!db_server) die("No se puede conectar a la Base de Datos".mysql_error());
?>