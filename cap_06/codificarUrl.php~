<?php
    echo ("\$textoOriginal=".$_POST["textoOriginal"]."<br>");
    echo ("\$campotext=".$_POST["campotext"]." y campotext x HTTP_POSTVARS:".$_POST["campotext"]."<br>");
    foreach ($_POST as $cve => $valor){
	  echo ("$cve -> $valor <br>");
	}
	$textoCodificado=rawurlencode($_POST["textoOriginal"]);
	$textoRecuperado=rawurldecode($textoCodificado);
?>
<html>
	<body>
		<table width="505" border="1">
			<tr>
				<td width="505">
					<table align="left" width="500" cellpadding="4" border="2">
						<tr>
							<th>TEXTO ORIGINAL</th>
						</tr>
						<tr>
							<td bgcolor="#C0C0C0"><?php echo ($_POST["textoOriginal"]); ?> </td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="505">
					<table align="left" width="500" cellpadding="4" border="2">
						<tr>
							<th>TEXTO CODIFICADO</th>
						</tr>
						<tr>
							<td bgcolor="#C0C0C0"><?php echo ($textoCodificado); ?> </td>
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
