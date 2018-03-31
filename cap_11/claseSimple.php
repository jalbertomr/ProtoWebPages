<?php
// Aqúí empieza la definición de la clase.
  class sumador {
	  function sumador (){
	  }
	  function sumar($sum_1, $sum_2){
		  $total=$sum_1+$sum_2;
		  return $total;
	  }
  }
// Terminamos la definición de la clase.
// ===========================================
// Creamos un nuevo objeto de la clsae que tenemos en el script.
  $hacerSumas=new sumador ();
// Llamamos al método sumar del objeto que hemos creado.
  $cinco = $hacerSumas->sumar (2,3);
// Mostramos el resultado.
  echo ("La suma de 2 + 3 da $cinco.");
?>
