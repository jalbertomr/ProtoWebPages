<?php
// Se define una función que calcula la cuota mensual
// para unos valores de capital, interes, y plazo.
	function calculaCuota ($capital, $interes, $meses) {
		$capital+=(($capital*$interes)/100);
		$cuota=$capital/$meses;
// Se formatea la cuota para una salida "presentable".
// (ver capítulo 6 si hay dudas).
		$cuotaFormato=sprintf("%.2f", $cuota);
// La función devuelve la cuota mensual.
		return ($cuotaFormato);
	}
?>
