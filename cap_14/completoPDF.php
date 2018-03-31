<?php
/* Se incorpora la clase FPDF al script. */
  require("fpdf/fpdf.php");
/* Se crea un objeto de la clase FPDF. */
  $objetoPDF=new FPDF();
/* Se genera una página del documento. */
  $objetoPDF->AddPage();
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los parámetros de la tipografía y se determina la misma. */
  $fuente="Arial";
  $estilo="B";
  $talla=30;
  $objetoPDF->SetFont($fuente, $estilo, $talla);
/* Se establece el color de línea para rodear una celda de contenidos.*/
  $rojo=255;
  $verde=0;
  $azul=0;
  $objetoPDF->SetDrawColor ($rojo, $verde, $azul);
/* Se establece el ancho de línea para rodear la celda de contenidos. */
  $anchoDeBorde=2;
  $objetoPDF->SetLineWidth ($anchoDeBorde);
/* Se establece un color de relleno para una celda de contenidos. */
  $rojo=0;
  $verde=200;
  $azul=200;
  $objetoPDF->SetFillColor ($rojo, $verde, $azul);
/* Se fijan los valores para crear una celda de contenidos y se genera esta. */
  $ancho=190;
  $alto=20;
  $cadena="Esto es el título del documento.";
  $borde=1;
  $posicion=0;
  $alineacion="C";
  $relleno=1;
  $objetoPDF->Cell($ancho, $alto, $cadena, $borde, $posicion, $alineacion, $relleno);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se incluye un salto de línea*/
  $objetoPDF->Ln(30);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los parámetros de la tipografía y se determina la misma. */
  $fuente="Arial";
  $estilo="";
  $talla=12;
  $objetoPDF->SetFont($fuente, $estilo, $talla);
/* Se establecen los parámetros de una celda de contenidos multilínea. */
  $ancho=0; // Todo el ancho útil en la página.
  $alto=6; // Altura por línea.
  $cadena="Esto es un texto para mostrar como crear un documento de tipo PDF sin contar con ";
  $cadena.="aplicaciones específicas para la creación de este tipo de archivos. Sin embargo";
  $cadena.=" sí es necesario tener una aplicación que permita visualizarlos. El Adobe Acrobat ";
  $cadena.="Reader lo permite y puede descargarse, gratuítamente de su página: ";
  $borde=2; //No se verá el borde.
  $alineacion="C"; // Alineación justificada.
/* Se imprime la celda multilínea con los parámetros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establece el color de fuente en azul, para un vínculo. */
  $rojo=0;
  $verde=0;
  $azul=255;
  $objetoPDF->SetTextColor ($rojo, $verde, $azul);
/* Se incluye el texto del vínculo con el método Text. Al aparecer una dirección web
este método crea, automáticamente, el enlace a dicha dirección. */
  $x=65;
  $y=62;
  $cadena="http://www.acrobat.com";
  $objetoPDF->Text($x, $y, $cadena);
/* Se reestablece la tipografía en negro. */
  $rojo=0;
  $verde=0;
  $azul=0;
  $objetoPDF->SetTextColor ($rojo, $verde, $azul);
/* Se escribe un punto, para terminar la frase que aparece. */
  $x=110;
  $y=62;
  $cadena=".";
  $objetoPDF->Text($x, $y, $cadena);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los parámetros de una celda de contenidos multilínea. */
  $ancho=0; // Todo el ancho útil en la página.
  $alto=6; // Altura por línea.
  $cadena="Como ve, con la clase FPDF pueden generarse documentos que incluyan enlaces. ";
  $cadena.="También puede incluir imágenes, como se ve a continuación:";
  $borde=0; //No se verá el borde.
  $alineacion="J"; // Alineación justificada.
/* Se imprime la celda multilínea con los parámetros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los parámetros de una celda de contenidos multilínea. */
  $ancho=100; // Solo una parte del ancho útil de la página.
  $alto=6; // Altura por línea.
  $cadena="El uso de esta clase es muy potente. Permite generar cualquier documento. ";
  $cadena.="Además, los textos a incluir pueden proceder de cualquier fuente. Así, si ";
  $cadena.="usted desarrolla un sitio de comercio electrónico, puede usar los datos del ";
  $cadena.="cliente o del pedido para generar facturas, albaranes, o resúmenes de compras. ";
  $cadena.="Dado que la salida del documento se puede almacenar en un archivo en disco, ";
  $cadena.="El cliente puede copiar todas las notas de transacciones en su propio ordenador.";
  $borde=0; //No se verá el borde.
  $alineacion="J"; // Alineación justificada.
/* Se imprime la celda multilínea con los parámetros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se incluye una imagen en el documento, con todos los parámetros necesarios en este caso. */
  $archivo="imagenes/aranaroja.jpg";
  $x=120;
  $y=82;
  $anchura=70;
  $altura=55;
  $objetoPDF->Image ($archivo, $x, $y, $anchura, $altura);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los parámetros de una celda de contenidos multilínea. */
  $ancho=0; // Todo el ancho útil en la página.
  $alto=6; // Altura por línea.
  $cadena="Vea los tutoriales incluidos con la clase. Como han sido escritos por los autores de ";
  $cadena.="la misma, le proporcionan toda la información necesaria para usarla, además de ";
  $cadena.="múltiples ejemplos sumamente interesantes.";
  $borde=0; //No se verá el borde.
  $alineacion="J"; // Alineación justificada.
/* Se imprime la celda multilínea con los parámetros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
  $objetoPDF->Output();
?>
