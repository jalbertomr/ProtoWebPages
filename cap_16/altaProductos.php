<?php
  define ("salto","<br>\n");
// Se intenta establecer la conexión con la base de datos.
  $conexionODBC=odbc_connect ("ODBC1", "", "");
// Se comprueba si se ha establecido.
  if (!$conexionODBC){
    die ("NO SE PUDO ESTABLECER LA CONEXIÓN ODBC");
  }
// Se comprueba si el código ya existe en la tabla.
  $consulta="SELECT * FROM productos WHERE codigoProducto=".$_POST["mCodigo"].";";
  $ejecutaConsulta=odbc_do($conexionODBC, $consulta);
  $registroExiste=odbc_fetch_row ($ejecutaConsulta);
// Si existe, se informa de la duplicidad. Si no, se graba el registro.
  if ($registroExiste){
	  echo ("El código ya existe. No se puede grabar.".salto);
  } else {
	  $consulta="INSERT INTO productos VALUES ('".$_POST["mCodigo"]."', '".$_POST["mDescripcion"]."', '".$_POST["mPrecioCompra"]."', '".$_POST["mPrecioVenta"]."', '".$_POST["mStock"]."');";
	  odbc_do($conexionODBC, $consulta);
	  echo ("REGISTRO GRABADO".salto);
  }
// Se cierra la base de datos.
  odbc_close ($conexionODBC);
?>
