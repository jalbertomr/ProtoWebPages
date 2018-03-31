	<?php
	$fraccionario_1 = 3.35;
	$fraccionario_2 = 3.75;
	$usoDeCeil_1 = ceil($fraccionario_1);
	$usoDeCeil_2 = ceil($fraccionario_2);
	$usoDeFloor_1 = floor($fraccionario_1);
	$usoDeFloor_2 = floor($fraccionario_2);
	$usoDeRound_1 = round($fraccionario_1);
	$usoDeRound_2 = round($fraccionario_2);
?>
<html>
  <body>
    <table width="600" border="1">
      <tr>
        <th colspan="4" scope="col">DISTINTOS MODOS DE REDONDEO </th>
      </tr>
      <tr>
        <th>N&ordm; FRACCIONARIO </th>
        <th>USO DE CEIL </th>
        <th>USO DE FLOOR </th>
        <th>USO DE ROUND </th>
      </tr>
      <tr>
        <td><?php echo ($fraccionario_1); ?></td>
        <td><?php echo ($usoDeCeil_1); ?></td>
        <td><?php echo ($usoDeFloor_1); ?></td>
        <td><?php echo ($usoDeRound_1); ?></td>
      </tr>
      <tr>
        <td><?php echo ($fraccionario_2); ?></td>
        <td><?php echo ($usoDeCeil_2); ?></td>
        <td><?php echo ($usoDeFloor_2); ?></td>
        <td><?php echo ($usoDeRound_2); ?></td>
      </tr>
    </table>
	  </body>
</html>
