<?php
  define ("salto","\n<br>");
// Se intenta conectar con el motor de MySQL
  $conectado = @mysql_connect ("localhost","root","");
  if ($conectado){
    echo ("SE HA CONECTADO AL SERVIDOR MySQL.".salto.salto);
  } else {
// Si la conexi�n falla, se avisa de ello y se interrumpe la ejecuci�n.
    die ("NO SE PUDO CONECTAR AL SERVIDOR MySQL.");
  }
/* Se selecciona la base de datos con la que vamos a trabajar. En un mismo servidor podemos tener m�s de una BBDD.
Este paso es imprescindible.*/
  mysql_select_db ("gestion", $conectado);
// Se forma la consulta para crear la tabla de proveedores.
  $consulta="CREATE TABLE IF NOT EXISTS proveedores ";
  $consulta.="(codigoProveedor CHAR (3), ";
  $consulta.="nombreProveedor VARCHAR (40), ";
  $consulta.="direccionProveedor VARCHAR (80), ";
  $consulta.="telefonoProveedor CHAR (9), ";
  $consulta.="ciudadProveedor VARCHAR (40), ";
  $consulta.="provinciaProveedor VARCHAR (20), ";
  $consulta.="emailProveedor VARCHAR (80), ";
  $consulta.="PRIMARY KEY (codigoProveedor)) ";
  $consulta.="TYPE=MyISAM;";
/* Se muestra la consulta en la p�gina. Este paso no es necesario
para la ejecuci�n, pero es muy �til en la fase de aprendizaje.*/
  echo ("<b>- CONSULTA DE CREACI�N DE LA TABLA DE PROVEEDORES: </b>");
  echo ($consulta.salto.salto);
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query ($consulta, $conectado);
// Se forma la consulta para crear la tabla de productos.
  $consulta="CREATE TABLE IF NOT EXISTS productos ";
  $consulta.="(codigoProducto CHAR (3), ";
  $consulta.="descripcionProducto VARCHAR (50), ";
  $consulta.="codigoProveedorProducto CHAR (3), ";
  $consulta.="precioCompraProducto FLOAT, ";
  $consulta.="precioVentaProducto FLOAT, ";
  $consulta.="stockProducto INT, ";
  $consulta.="PRIMARY KEY (codigoProducto)) ";
  $consulta.="TYPE=MyISAM;";
/* Se muestra la consulta en la p�gina. Este paso no es necesario
para la ejecuci�n, pero es muy �til en la fase de aprendizaje.*/
  echo ("<b>- CONSULTA DE CREACI�N DE LA TABLA DE PRODUCTOS: </b>");
  echo ($consulta.salto.salto);
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query ($consulta, $conectado);
?>
