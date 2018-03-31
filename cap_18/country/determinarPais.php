<?php
/* Se incluyen el mini-script que abre la base de datos. */
  include ("abrirDB.php");
/* Se incluye el archivo que contiene la función para obtener la IP del cliente. */
  include ("obtenerIP.php");
/* Se obtiene la IP del cliente, en el formato típico: "xxx.xxx.xxx.xxx". */
  $direccionReal=obtenerIPCliente();
/* Se convierte la IP a valor numérico. */
  $direccionNumerica=ip2long($direccionReal);
/* Se localiza el registro que corresponde a la ip numérica. */
  $consulta="SELECT countryCode2, countryName FROM ipcountry WHERE ipStart<=$direccionNumerica AND ipEnd>=$direccionNumerica;";
  $hacerConsulta=mysql_query($consulta, $conexion);
/* Se recuperan los datos de "código del país de dos letras y nombre del país. */
  $datosDePais=mysql_fetch_array ($hacerConsulta, MYSQL_ASSOC);
  $codigoDePais=strtolower($datosDePais["countryCode2"]);
  $nombreDePais=$datosDePais["countryName"];
/* Se obtiene el nombre de la imagen de la bandera del país. */
  $nombreDeImagen="imagenes/banderas/".$codigoDePais.".gif";
/* Se muestran los resultados. */
  echo ("El pais que corresponde a la IP $direccionReal es: $nombreDePais. ");
  echo ("<IMG SRC=$nombreDeImagen ALT=$nombreDEPais>");
/* Se liberan recursos y se cierra la BBDD. */
  mysql_free_result ($hacerConsulta);
  mysql_close ($conexion);
?>
