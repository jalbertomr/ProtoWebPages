<?php
  define ("salto","<br>\n");
// Se intenta establecer la conexión con la base de datos.
  $conexionODBC=odbc_connect ("ODBC1", "", "");
// Se comprueba si se ha establecido y se informa de ello.
  if ($conexionODBC){
	  echo ("LA CONEXIÓN ODBC HA SIDO ESTABLECIDA.".salto);
  } else {
	  die ("NO SE PUDO ESTABLECER LA CONEXIÓN ODBC");
  }
// Se cierra la conexión.
  odbc_close ($conexionODBC);
  echo ("LA CONEXIÓN ODBC HA SIDO CERRADA.".salto);
?>
