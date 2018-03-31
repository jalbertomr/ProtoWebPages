<?php
  define ("salto","<br>\n");
// Se intenta establecer la conexión con la base de datos.
  $conexionODBC=odbc_connect ("ODBC1", "", "");
// Se comprueba si se ha establecido.
  if (!$conexionODBC){
    die ("NO SE PUDO ESTABLECER LA CONEXIÓN ODBC");
  }
// Se seleccionan todos los registros de la tabla de productos.
  $consulta="SELECT * FROM productos;";
  $ejecutaConsulta=odbc_do($conexionODBC, $consulta);
// Se muestran en una tabla de HTML.
  $formato="width='600', bgcolor='pink', border='2', bordercolor='blue'";
  $registros=odbc_result_all ($ejecutaConsulta, $formato);
  echo ($registros);
// Se cierra la base de datos.
  odbc_close ($conexionODBC);
?>
