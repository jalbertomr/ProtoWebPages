<?php
require_once('login.php');
$db_conn=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_conn) die("No se pudo conectar al a base de datos ".mysql_error());

mysql_select_db($db_database)
  or die("No se pudo seleccionar la base de datos ".mysql_error());
  
$query="DESC cats";

$result = mysql_query($query);

if(!$result) die("No se pudo ejecutar la consulta".$query.mysql_error());
$rows = mysql_num_rows($result);

echo"<table><tr><th>Columna</th><th>Type</th><th>Null</th><th>Key</th></tr>";

for($j = 0; $j < $rows; ++$j){
  $row = mysql_fetch_row($result);
  echo "<tr>";
  for($k=0;$k<4;++$k) echo"<td>".$row[$k]."</td>";
  echo "</tr>";	
}

echo"</table>";
?>