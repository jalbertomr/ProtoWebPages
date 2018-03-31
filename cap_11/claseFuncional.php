<?php
// Empieza la definición de la clase.
  class coche {
    function coche($marca, $modelo, $color){
      $this->marca=$marca;
      $this->modelo=$modelo;
      $this->color=$color;
    }
    function mostrar (){
      echo ("<table width='200' border='2' cellpadding='2' cellspacing='0'>");
      echo ("<tr><td width='50%'>MARCA</td><td width='50%'>".$this->marca."</td></tr>");
      echo ("<tr><td>MODELO</td><td>".$this->modelo."</td></tr>");
      echo ("<tr><td>COLOR</td><td>".$this->color."</td></tr>");
      echo ("</table>");
    }
  }
// Termina la definición de la clase.
// =========================================
// Se crean tres objetos formando una matriz
  $movil[0]=new coche("Peugeot", "405", "Gris");
  $movil[1]=new coche("Renault","Master","Blanco");
  $movil[2]=new coche("Cadillac","Seville","Azul");
/* Mediante un bucle se ejecuta el método mostrar de cada uno de los objetos.*/
  for ($contador=0;$contador<3; $contador++) $movil[$contador]->mostrar();
?>
