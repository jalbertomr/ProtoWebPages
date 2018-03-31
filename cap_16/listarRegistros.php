<html>
  <head><title>Leyendo registros desde Access</title></head>
<body>
  <table border="2" width="400">
    <tr><th>C�digo</th>
    <th>Descripci�n</th></tr>
    <?php
// Se establece la conexi�n con la BBDD
      $conexionODBC = odbc_connect("ODBC1", "", "");
// Se crea la consulta de selecci�n.
      $consulta = "SELECT codigoProducto, descripcion FROM productos;";
// Se ejecuta la consulta, obteniendo un cursor.
      $ejecutaConsulta = odbc_do($conexionODBC, $consulta);
// Se obtiene el n�mero de campos del cursor.
      $totalDeCampos = odbc_num_fields($ejecutaConsulta);
// Se recorre el cursor.
      while (odbc_fetch_row($ejecutaConsulta)){
        echo "<tr>";
        for ($campo = 1; $campo <= $totalDeCampos; $campo++){
          echo "<td align='center'>";
          if (odbc_result($ejecutaConsulta, $campo) != null)
             echo odbc_result($ejecutaConsulta, $campo);
             echo "</td>";
           }
         echo "</tr>";
         }
// Se liberan recursos y se cierra la conexi�n.
      odbc_free_result($ejecutaConsulta);
      odbc_close($conexionODBC);
    ?>
	</table>
  </body>
</html>
