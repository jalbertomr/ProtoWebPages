<?php
// Se incluye el mini-script que establece la conexión con MySQL y selecciona la BBDD que necesitamos.
  require("usarGestion.php");
// Se crea una consulta de selección.
  $consulta="SELECT * FROM productos WHERE precioCompraProducto<10.00;";
// Se vuelca la consulta a la página, a fines didácticos.
  echo ($consulta."<br>");
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query($consulta, $conectado);
  echo ("<br><hr><br>");
// Se obtiene el número de registros que forman el cursor.
  $numeroDeRegistros=mysql_num_rows ($hacerConsulta);
  echo ("El número de registros recuperados es de: $numeroDeRegistros.");
?>
