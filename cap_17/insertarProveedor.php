<?php
// Se incluye el mini-script que establece la conexión con MySQL y selecciona la BBDD que necesitamos.
  require("usarGestion.php");
// Se crea una consulta para insertar un registro.
  $consulta="INSERT INTO proveedores (codigoProveedor, nombreProveedor, direccionProveedor, telefonoProveedor, ciudadProveedor, provinciaProveedor, emailProveedor) VALUES ('PR1', 'ACEROS DUROS, S.A.', 'CL Piedras Blancas, 67', '919998877', 'Fuenlabrada', 'MADRID', 'ventas@acerosduros.org');";
// Se vuelca la consulta a la página, a fines didácticos.
  echo ($consulta."<br>");
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query($consulta, $conectado);
// Se comprueba si se ha podido grabar el registro.
  if ($hacerConsulta){
    echo ("SE HA GRABADO EL REGISTRO.");
  } else {
    echo ("NO SE HA PODIDO GRABAR EL REGISTRO.");
  }
?>
