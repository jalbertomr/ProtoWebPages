<?php
// Se incluye el mini-script que establece la conexi�n con MySQL y selecciona la BBDD que necesitamos.
  require("usarGestion.php");
// Se crea una consulta de selecci�n.
  $consulta="SELECT * FROM productos WHERE precioCompraProducto<10.00;";
// Se vuelca la consulta a la p�gina, a fines did�cticos.
  echo ($consulta."<br>");
// Se ejecuta la consulta.
  $hacerConsulta=mysql_query($consulta, $conectado);
  echo ("<br><hr><br>");
// Se obtiene el n�mero de registros que forman el cursor.
  $numeroDeRegistros=mysql_num_rows ($hacerConsulta);
  echo ("El n�mero de registros recuperados es de: $numeroDeRegistros.");
?>
