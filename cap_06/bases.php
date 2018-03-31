<?php
// Se establecen los valores iniciales
	$valorDecimal = 9058341;
	$valorBinario = "10100011101011";
	$valorOctal = "74521";
	$valorHexa = "FF56C1";
// Se convierte el decimal a otras bases
	$decimalBinario = decbin($valorDecimal);
	$decimalOctal = decoct($valorDecimal);
	$decimalHexa = dechex($valorDecimal);
// Se convierte de otras bases a decimal
	$binarioDecimal = bindec($valorBinario);
	$octalDecimal = octdec($valorOctal);
	$hexaDecimal = hexdec($valorHexa);
?>
<html>
  <body>
    <table width="600" border="2" cellpadding="0" cellspacing="2">
      <tr>
        <th colspan="4" scope="col">TABLA DE CONVERSION</th>
      </tr>
      <tr>
        <th width="138">VALOR</th>
        <th width="113">ESTA EN </th>
        <th width="121">CONVERTIR A </th>
        <th width="200">RESULTADO</th>
      </tr>
      <tr>
        <td rowspan="3"><?php echo ($valorDecimal); ?></td>
        <td rowspan="3">DECIMAL</td>
        <td>BINARIO</td>
        <td><?php echo ($decimalBinario); ?></td>
      </tr>
      <tr>
        <td>OCTAL</td>
        <td><?php echo ($decimalOctal); ?></td>
      </tr>
      <tr>
        <td>HEXA</td>
        <td><?php echo ($decimalHexa); ?></td>
      </tr>
      <tr>
        <td><?php echo ($valorBinario); ?></td>
        <td>BINARIO</td>
        <td rowspan="3">DECIMAL</td>
        <td><?php echo ($binarioDecimal); ?></td>
      </tr>
      <tr>
        <td><?php echo ($valorOctal); ?></td>
        <td>OCTAL</td>
        <td><?php echo ($octalDecimal); ?></td>
      </tr>
      <tr>
        <td><?php echo ($valorHexa); ?></td>
        <td>HEXA</td>
        <td><?php echo ($hexaDecimal); ?></td>
      </tr>
    </table>
  </body>
</html>
