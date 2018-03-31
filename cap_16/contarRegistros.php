<?php
  define ("salto","<br>\n");
// Se intenta establecer la conexión con la base de datos.
  $conexionODBC=odbc_connect ("ODBC1", "", "");
// Se comprueba si se ha establecido.
  if (!$conexionODBC){
    die ("NO SE PUDO ESTABLECER LA CONEXIÓN ODBC");
  }
// Se seleccionan todos los registros de la tabla de productos con COUNT para contarlos.
  $consulta="SELECT COUNT (*) FROM productos;";
  $ejecutaConsulta=odbc_do($conexionODBC, $consulta);
// Se obtiene el total de registros.
  $total=odbc_result ($ejecutaConsulta,1);
  echo ("El total de registros es $total.".salto);
// Se cierra la base de datos.
  odbc_close ($conexionODBC);
?>
