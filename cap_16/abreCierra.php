<?php
  define ("salto","<br>\n");
// Se intenta establecer la conexi�n con la base de datos.
  $conexionODBC=odbc_connect ("ODBC1", "", "");
// Se comprueba si se ha establecido y se informa de ello.
  if ($conexionODBC){
	  echo ("LA CONEXI�N ODBC HA SIDO ESTABLECIDA.".salto);
  } else {
	  die ("NO SE PUDO ESTABLECER LA CONEXI�N ODBC");
  }
// Se cierra la conexi�n.
  odbc_close ($conexionODBC);
  echo ("LA CONEXI�N ODBC HA SIDO CERRADA.".salto);
?>
