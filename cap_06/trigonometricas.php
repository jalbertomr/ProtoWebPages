<?php
	$anguloRectoEnGrados = 45;
	$anguloRectoEnRadianes = deg2rad($anguloRectoEnGrados);
	$seno = sin($anguloRectoEnRadianes);
	$coseno = cos($anguloRectoEnRadianes);
	$tangente = tan($anguloRectoEnRadianes);
	$arcoSeno = asin($anguloRectoEnRadianes);
	$arcoCoseno = acos($anguloRectoEnRadianes);
	$arcoTangente = atan($anguloRectoEnRadianes);
?>
<html>
	<body>
		<table width="300" border="1" cellpadding="2">
			<tr>
				<th colspan="2">FUNCIONES TRIGONOMÉTRICAS</th>
			</tr>
			<tr>
				<td colspan="2">
					&Aacute;ngulo en grados:
					<?php echo ($anguloRectoEnGrados); ?>
					<br>
					&Aacute;ngulo en radianes:
					<?php echo ($anguloRectoEnRadianes); ?>
					<br>
				</td>
			</tr>
			<tr>
	 			<th>FUNCIÓN</th>
				<th>VALOR</th>
			</tr>
			<tr>
				<td>Seno</td>
				<td><?php echo($seno); ?></td>
			</tr>
			<tr>
				<td>Coseno</td>
				<td><?php echo($coseno); ?></td>
			</tr>
			<tr>
				<td>Tangente</td>
				<td><?php echo($tangente); ?></td>
			</tr>
			<tr>
				<td>Arco seno</td>
				<td><?php echo($arcoSeno); ?></td>
			</tr>
			<tr>
				<td>Arco coseno</td>
				<td><?php echo($arcoCoseno); ?></td>
			</tr>
			<tr>
				<td>Arco tangente</td>
				<td><?php echo($arcoTangente); ?></td>
			</tr>
		</table>
	</body>
</html>
