<?php  //crearTablaCitas.phprequire_once('login.php');
require_once('login.php');
$db_conn=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_conn) die("No se pudo conectar a MySQL".mysql(error));
mysql_select_db($db_database, $db_conn)
or die("No se pudo seleccionar la base de datos".mysql_error());

$query = "CREATE TABLE CITA (
 ID_CITA INT PRIMARY KEY AUTO_INCREMENT,
 HORA TIME, 
 DIA DATE, 
 ASUNTO VARCHAR(40))";

$result=mysql_query($query, $db_conn);
if(!$result)
  die ("No se pudo ejecutar consulta fallido: $query<br />".
  mysql_error()."<br /><br />"); 

echo "Tabla CITA creada!!";
@mysql_free_result($result);
mysql_close($db_conn);
?>