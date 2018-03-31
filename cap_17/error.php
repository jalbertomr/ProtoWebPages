<?php
// Se incluye el mini-script que establece la conexión con MySQL y selecciona la BBDD que necesitamos.
  require("usarGestion.php");
// Se crea una consulta para insertar un registro.
  $consulta="INSERT INTO proveedores (codigoProveedor, nombreProveedor, direccionProveedor, telefonoProveedor, ciudadProveedor, provinciaProveedor, emailProveedor) VALUES ();";
// Se vuelca la consulta a la página, a fines didácticos.
  echo ($consulta."<br>");
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query($consulta, $conectado);
// Se recupera información sobre el error producido.
  $numeroError=mysql_errno();
  $tipoError=mysql_error();
// Se muestra lo que tenemos acerca del error.
  echo ("El número del error es: <b>$numeroError</b><br>");
  echo ("La descripción del error es: <b>$tipoError</b><br>");
?>
