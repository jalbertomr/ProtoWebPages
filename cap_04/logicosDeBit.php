<?php
// Se definen los valores con los que trabajar.
  $valor_1=19;
  $valor_2=13;
// Se realizan las operaciones lógicas de bit.
  $resultadoAnd=$valor_1 & $valor_2;
  $resultadoOr=$valor_1 | $valor_2;
  $resultadoXor=$valor_1 ^ $valor_2;
// Se muestran los valores y los resultados.
  echo ("El valor 1 es: ". $valor_1."<br>");
  echo ("El valor 2 es: ". $valor_2."<br>");
  echo ("El resultado del valor 1 & el valor 2 es: ". $resultadoAnd."<br>");
  echo ("El resultado del valor 1 | el valor 2 es: ". $resultadoOr."<br>");
  echo ("El resultado del valor 1 ^ el valor 2 es: ". $resultadoXor."<br>");
?>
