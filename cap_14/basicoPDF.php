<?php
  require("fpdf/fpdf.php");
  $objetoPDF=new FPDF();
  $cadena="Esto es un texto incluido en un documento PDF, para el libro de PHP.";

  $objetoPDF->AddPage();
  $objetoPDF->SetFont("Arial","B",16);
  $objetoPDF->Cell(190,10,$cadena);
  $objetoPDF->Output();
?>
