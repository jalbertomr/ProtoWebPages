<?php
	$textoRecuperado=rawurldecode($_POST["ocultoTexto"]);
?>
<html>
	<body>
		<table width="505" border="1">
			<tr>
				<td width="505">
					<table align="left" width="500" cellpadding="4" border="2">
						<tr>
							<th>TEXTO ORIGINAL (YA CODIFICADO)</th>
						</tr>
						<tr>
							<td bgcolor="#C0C0C0"><?php echo ($_POST["ocultoTexto"]); ?> </td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="505">
					<table align="left" width="500" cellpadding="4" border="2">
						<tr>
							<th>TEXTO RECUPERADO</th>
						</tr>
						<tr>
							<td bgcolor="#C0C0C0"><?php echo ($textoRecuperado); ?> </td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
