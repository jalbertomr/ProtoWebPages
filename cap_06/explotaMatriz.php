<?php
	$cadenaOriginal = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//Se usa la funcion chunk_split para generar una cadena en
//la que,cada 10 caracteres, se introduce la secuencia "*.*".
	$cadenaModificada = chunk_split($cadenaOriginal, 10, "*.*");
//Se muestran las cadenas en la página para ver que
//la cadena original no se ha alterado.
	echo ("La cadena original es: $cadenaOriginal<br>");
	echo ("La cadena modificada es: $cadenaModificada<br><br><br>");
//Se genera una matriz a partir de la cadena modificada.
	$matriz = explode ("*.*",$cadenaModificada);
/*Cada elemento de la matriz contendrá un fragmento de la
cadena original. PHP usa la secuencia separadora ("*.*", en este ejemplo)
para saber donde debe empezar y acabar cada elemento de la matriz.
La matriz se genera, de forma automática con un último elemento vacío.
No olvide tener esto en cuenta.*/
	$elementosDeLaMatriz = count($matriz);
	echo ("La matriz tiene $elementosDeLaMatriz elementos.<br>");
	for ($contador = 0; $contador < $elementosDeLaMatriz; $contador++){
		echo ("El elemento $contador contiene '$matriz[$contador]'<br>");
	}
	echo ("<br><br>");

//Recuperamos la cadena original a partir de la matriz con implode().
	$nuevaCadena = implode($matriz);
	echo ("La cadena recuperada es: "."\"$nuevaCadena\""."<br>");
?>
