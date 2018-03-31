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

// Consulta para crear la tabla de productos
  $consulta="CREATE TABLE productos (codigoProducto INTEGER PRIMARY KEY, descripcion CHAR(40), pCompra FLOAT, pVenta FLOAT, stock INTEGER);";
// Se ejecuta la consulta.
  odbc_do ($conexionODBC, $consulta);

// Consulta para crear la tabla de productos
  $consulta="CREATE TABLE empleados (codigoEmpleado INTEGER PRIMARY KEY, nombre CHAR(50), salario FLOAT, departamento CHAR (2));";
// Se ejecuta la consulta.
  odbc_do ($conexionODBC, $consulta);

// Se cierra la conexi�n.
  odbc_close ($conexionODBC);
  echo ("LA CONEXI�N ODBC HA SIDO CERRADA.".salto);
?>