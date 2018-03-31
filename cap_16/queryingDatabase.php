<?php 
  $query="SELECT * FROM classics";
  $result=mysql_query($query);
  if(!$result) die("Consulta a base de datos fallida!:",mysql_error());
?>