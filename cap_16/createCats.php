<?php
require_once('login.php');
$db_conn=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_conn) die("No se pudo conectar la Base de datos".mysql_error());
mysql_select_db($db_database)
  or die("No se pudo seleccionar la Base de datos".mysql_error());
  
$query="CREATE TABLE cats(
  id SMALLINT NOT NULL AUTO_INCREMENT,
  family VARCHAR(32) NOT NULL,
  name VARCHAR(32) NOT NULL,
  age TINYINT NOT NULL,
  PRIMARY KEY (id))";
  
$result = mysql_query($query);
if(!$result) die("No se pudo crear la tabla cats".mysql_error());
echo "TABLA Cats creada";
?>