<?php
/* Se incorpora la clase FPDF al script. */
  require("fpdf/fpdf.php");
/* Se crea un objeto de la clase FPDF. */
  $objetoPDF=new FPDF();
/* Se genera una p�gina del documento. */
  $objetoPDF->AddPage();
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los par�metros de la tipograf�a y se determina la misma. */
  $fuente="Arial";
  $estilo="B";
  $talla=30;
  $objetoPDF->SetFont($fuente, $estilo, $talla);
/* Se establece el color de l�nea para rodear una celda de contenidos.*/
  $rojo=255;
  $verde=0;
  $azul=0;
  $objetoPDF->SetDrawColor ($rojo, $verde, $azul);
/* Se establece el ancho de l�nea para rodear la celda de contenidos. */
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
  $cadena="Esto es el t�tulo del documento.";
  $borde=1;
  $posicion=0;
  $alineacion="C";
  $relleno=1;
  $objetoPDF->Cell($ancho, $alto, $cadena, $borde, $posicion, $alineacion, $relleno);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se incluye un salto de l�nea*/
  $objetoPDF->Ln(30);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los par�metros de la tipograf�a y se determina la misma. */
  $fuente="Arial";
  $estilo="";
  $talla=12;
  $objetoPDF->SetFont($fuente, $estilo, $talla);
/* Se establecen los par�metros de una celda de contenidos multil�nea. */
  $ancho=0; // Todo el ancho �til en la p�gina.
  $alto=6; // Altura por l�nea.
  $cadena="Esto es un texto para mostrar como crear un documento de tipo PDF sin contar con ";
  $cadena.="aplicaciones espec�ficas para la creaci�n de este tipo de archivos. Sin embargo";
  $cadena.=" s� es necesario tener una aplicaci�n que permita visualizarlos. El Adobe Acrobat ";
  $cadena.="Reader lo permite y puede descargarse, gratu�tamente de su p�gina: ";
  $borde=2; //No se ver� el borde.
  $alineacion="C"; // Alineaci�n justificada.
/* Se imprime la celda multil�nea con los par�metros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establece el color de fuente en azul, para un v�nculo. */
  $rojo=0;
  $verde=0;
  $azul=255;
  $objetoPDF->SetTextColor ($rojo, $verde, $azul);
/* Se incluye el texto del v�nculo con el m�todo Text. Al aparecer una direcci�n web
este m�todo crea, autom�ticamente, el enlace a dicha direcci�n. */
  $x=65;
  $y=62;
  $cadena="http://www.acrobat.com";
  $objetoPDF->Text($x, $y, $cadena);
/* Se reestablece la tipograf�a en negro. */
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
/* Se establecen los par�metros de una celda de contenidos multil�nea. */
  $ancho=0; // Todo el ancho �til en la p�gina.
  $alto=6; // Altura por l�nea.
  $cadena="Como ve, con la clase FPDF pueden generarse documentos que incluyan enlaces. ";
  $cadena.="Tambi�n puede incluir im�genes, como se ve a continuaci�n:";
  $borde=0; //No se ver� el borde.
  $alineacion="J"; // Alineaci�n justificada.
/* Se imprime la celda multil�nea con los par�metros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los par�metros de una celda de contenidos multil�nea. */
  $ancho=100; // Solo una parte del ancho �til de la p�gina.
  $alto=6; // Altura por l�nea.
  $cadena="El uso de esta clase es muy potente. Permite generar cualquier documento. ";
  $cadena.="Adem�s, los textos a incluir pueden proceder de cualquier fuente. As�, si ";
  $cadena.="usted desarrolla un sitio de comercio electr�nico, puede usar los datos del ";
  $cadena.="cliente o del pedido para generar facturas, albaranes, o res�menes de compras. ";
  $cadena.="Dado que la salida del documento se puede almacenar en un archivo en disco, ";
  $cadena.="El cliente puede copiar todas las notas de transacciones en su propio ordenador.";
  $borde=0; //No se ver� el borde.
  $alineacion="J"; // Alineaci�n justificada.
/* Se imprime la celda multil�nea con los par�metros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se incluye una imagen en el documento, con todos los par�metros necesarios en este caso. */
  $archivo="imagenes/aranaroja.jpg";
  $x=120;
  $y=82;
  $anchura=70;
  $altura=55;
  $objetoPDF->Image ($archivo, $x, $y, $anchura, $altura);
///////////////////////////////////////////////////////////////////////////////////////////////
/* Se establecen los par�metros de una celda de contenidos multil�nea. */
  $ancho=0; // Todo el ancho �til en la p�gina.
  $alto=6; // Altura por l�nea.
  $cadena="Vea los tutoriales incluidos con la clase. Como han sido escritos por los autores de ";
  $cadena.="la misma, le proporcionan toda la informaci�n necesaria para usarla, adem�s de ";
  $cadena.="m�ltiples ejemplos sumamente interesantes.";
  $borde=0; //No se ver� el borde.
  $alineacion="J"; // Alineaci�n justificada.
/* Se imprime la celda multil�nea con los par�metros establecidos. */
  $objetoPDF->MultiCell($ancho, $alto, $cadena, $borde, $alineacion);
///////////////////////////////////////////////////////////////////////////////////////////////
  $objetoPDF->Output();
?>
