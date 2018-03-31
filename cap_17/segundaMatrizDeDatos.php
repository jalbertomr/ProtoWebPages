<html>
  <head>
    <title>Matriz De Datos</title>
    <?php
// Se incluye el mini-script que establece la conexión con MySQL y selecciona la BBDD que necesitamos.
    require("usarGestion.php");
// Se crea una consulta de selección.
    $consulta="SELECT codigoProducto, descripcionProducto, precioCompraProducto FROM productos WHERE precioCompraProducto<10.00;";
// Se ejecuta la consulta.
    $hacerConsulta=mysql_query($consulta, $conectado);
  ?>
  </head>
  <body>
    <table border="2" cellpadding="2" cellspacing="0">
    <tr><th colspan="3">Relaci&oacute;n de productos de menos de 10 &euro;</th></tr>
    <tr><th>C&oacute;digo</th>
    <th>Descripci&oacute;n</th>
    <th>P. Compra</th></tr>
    <?php
// Se recorre el cursor, mientras haya elementos, recuperando cada dato.
    while ($fila = mysql_fetch_array($hacerConsulta, MYSQL_ASSOC)) {
      echo ("<tr><td>".$fila["codigoProducto"]."</td>");
      echo ("<td>".$fila["descripcionProducto"]."</td>");
      echo ("<td>".$fila["precioCompraProducto"]."</td></tr>");
    }
	?>
    </table>
  </body>
</html>
