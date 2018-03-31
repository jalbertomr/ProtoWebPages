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
// Se obtiene el número de registros que forman el cursor.
    $numeroDeRegistros=mysql_num_rows ($hacerConsulta);
  ?>
  </head>
  <body>
    <table border="2" cellpadding="2" cellspacing="0">
    <tr><th colspan="3">Relaci&oacute;n de productos de menos de 10 &euro;</th></tr>
    <tr><th>C&oacute;digo</th>
    <th>Descripci&oacute;n</th>
    <th>P. Compra</th></tr>
    <?php
/* Se crea un bucle que se repetirá tantas veces como elementos tenga el cursor obtenido anteriormente. */
	  for ($contador=0; $contador<$numeroDeRegistros; $contador++){
/* Se obtienen los datos almacenados en el elemento del cursor al que apunta la variable de control del bucle. */
        $codigo=mysql_result ($hacerConsulta, $contador, "codigoProducto");
        $descripcion=mysql_result ($hacerConsulta, $contador, "descripcionProducto");
        $precioCompra=mysql_result ($hacerConsulta, $contador, "precioCompraProducto");
        ?>
<!-- Se crea una fila de la tabla con los datos obtenidos -->
        <tr><td><?php echo ($codigo); ?></td>
        <td><?php echo ($descripcion); ?></td>
        <td><?php echo ($precioCompra); ?></td></tr>
        <?php
      }
    ?>
    </table>
  </body>
</html>
