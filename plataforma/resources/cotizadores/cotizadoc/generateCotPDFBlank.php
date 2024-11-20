<?php

header("Cache-Control: no-cache, must-revalidate");
setlocale(LC_TIME, "spanish");
/////////////////// AJUSTES INICIALES ///////////////////

/////////////////// SE CARGAN LIBRERIAS PARA EL PDF ///////////////////
use setasign\Fpdi;

require_once('tcpdf/tcpdf.php');
require_once('fpdi/autoload.php');

///////////////// SE INSTANCIA LA CLASE DEL PDF /////////////////
//////// SE PUEDE AÑADIR ENCABEZADO Y PIE DE PAGINA AQUÍ ////////
class Pdf extends Fpdi\Tcpdf\Fpdi
{
    /**
     * "Remembers" the template id of the imported page
     */
    protected $tplId;

    /**
     * Draw an imported PDF logo on every page
     */
    function Header()
    {
        // emtpy method body
    }

    function Footer()
    {
        // emtpy method body
    }
}

///////////////// SE CREA OBJETO reciboPDF /////////////////
$reciboPDF = new pdf();

////////////// SE CARGA LA PLANTILLA CON LA QUE TRABAJAREMOS //////////////
//Hoja con 1 partida para cotizacion
if($filePDF==1){
    $pagecount = $reciboPDF->setSourceFile($root."resources/cotizadores/cotizadoc/hoja_4.pdf");
}

//Hoja con 2 partidas para cotizacion
if($filePDF==2){
    $pagecount = $reciboPDF->setSourceFile($root."resources/cotizadores/cotizadoc/hoja_5.pdf");
}

//Hoja con 3 partidas para cotizacion
if($filePDF==3){
    $pagecount = $reciboPDF->setSourceFile($root."resources/cotizadores/cotizadoc/hoja_6.pdf");
}

////////////// SE IMPORTA LA HOJA QUE SE USARÁ DE PLANTILLA //////////////
$tpl = $reciboPDF->importPage(1);

/////// DESIGNAMOS EL TAMAÑO DE LA PLANTILLA DESDE LA HOJA IMPORTADA ///////
$size = $reciboPDF->getTemplateSize($tpl);
/////// DESIGNAMOS EL TAMAÑO DE LA PLANTILLA DESDE LA HOJA IMPORTADA ///////

///////// AÑADIMOS UNA PÁGINA DESIGNANDO EL TAMAÑO DEL DOCUMENTO /////////
////////////// (LETTER = CARTA, 'P' = Portrait ~ vertical) //////////////
$reciboPDF->AddPage('P', 'A4');
///////// AÑADIMOS UNA PÁGINA DESIGNANDO EL TAMAÑO DEL DOCUMENTO /////////

////////////// CARGAMOS LA PLANTILLA EN NUESTRA NUEVA PÁGINA //////////////
$reciboPDF->useTemplate($tpl);
////////////// CARGAMOS LA PLANTILLA EN NUESTRA NUEVA PÁGINA //////////////

// FECHA
$reciboPDF->SetFont('helvetica', '', 12);
$reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
$reciboPDF->SetXY(167, 54.7); // Posición x, posición y
$reciboPDF->Cell(0, 10, $fecha, 0, 1, '');

// NOMBRE
$reciboPDF->SetFont('helvetica', '', 11);
$reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
$reciboPDF->SetXY(30.5, 66.5); // Posición x, posición y
$reciboPDF->Cell(0, 10, $nombre, 0, 1, '');

// TELEFONO
$reciboPDF->SetFont('helvetica', '', 11);
$reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
$reciboPDF->SetXY(30.5, 73.2); // Posición x, posición y
$reciboPDF->Cell(0, 10, $telefono, 0, 1, '');

// EMAIL
$reciboPDF->SetFont('helvetica', '', 11);
$reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
$reciboPDF->SetXY(25.8, 80); // Posición x, posición y
$reciboPDF->Cell(0, 10, $email, 0, 1, '');

//Si se reciben valores de 1 partida
if($filePDF==1){
    //PARTIDA DE COTIZACION 1
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 129);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService1!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService1, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService1, 0, 'L', 0, 1, '', '', true);
    }

    // PLACEPRICE
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(60, 141.8); // Posición x, posición y
    $reciboPDF->Cell(0, 10, $placePrice, 0, 1, '');
    
    // Costo 1
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 127); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo1, 0, 1, '');

    // SUBTOTAL
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 151.5); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');

    if($addIva==0){
        // TOTAL FINAL
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 169.3); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');
    }else{
        // IVA
        $iva=($total*16)/100;
        $reciboPDF->SetFont('helvetica', '', 11);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 158.5); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$iva, 0, 1, '');

        // TOTAL FINAL
        $totalGlobal=$total+$iva;
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 169.3); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$totalGlobal, 0, 1, '');
    }
}

//Si se reciben valores de dos partidas
if($filePDF==2){
    //------------ IMPRIME PARTIDA 1 -----------------------------
    // Typer service 1
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 120);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService1!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService1, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService1, 0, 'L', 0, 1, '', '', true);
    }

    // PLACEPRICE
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(60, 148.05); // Posición x, posición y
    $reciboPDF->Cell(0, 10, $placePrice, 0, 1, '');

    // Costo 1
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 118); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo1, 0, 1, '');

    //------------ IMPRIME PARTIDA 2 -----------------------------
    // Typer service 2
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 135.5);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService2!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService2, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService2, 0, 'L', 0, 1, '', '', true);
    }

    // Costo 2
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 133); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo2, 0, 1, '');

    // SUBTOTAL
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 156); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');

    if($addIva==0){
        // TOTAL FINAL
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 173.5); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');
    }else{
        // IVA
        $iva=($total*16)/100;
        $reciboPDF->SetFont('helvetica', '', 11);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 163); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$iva, 0, 1, '');

        // TOTAL FINAL
        $totalGlobal=$total+$iva;
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 173.5); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$totalGlobal, 0, 1, '');
    }   
}

//Si se reciben valores de tres partidas
if($filePDF==3){
    //------------ IMPRIME PARTIDA 1 -----------------------------
    // Type service 1
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 120);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService1!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService1, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService1, 0, 'L', 0, 1, '', '', true);
    }

    // PLACEPRICE
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(60, 163.2); // Posición x, posición y
    $reciboPDF->Cell(0, 10, $placePrice, 0, 1, '');

    // Costo 1
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 118); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo1, 0, 1, '');

    //------------ IMPRIME PARTIDA 2 -----------------------------
    // Typer service 2
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 135.5);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService2!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService2, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService2, 0, 'L', 0, 1, '', '', true);
    }

    // Costo 2
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 133); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo2, 0, 1, '');

    //------------ IMPRIME PARTIDA 3 -----------------------------
    // Type service 3
    $reciboPDF->SetFont('helvetica', '', 11);
    $reciboPDF->SetTextColor(0, 0, 0);
    $reciboPDF->SetXY(12.5, 151);
    $maxWidth = 160;
    $lineHeight = 9;
    if($typeService3!=""){
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $typeService3, 0, 'L', 0, 1, '', '', true);
    }else{
        $reciboPDF->MultiCell($maxWidth, $lineHeight, $listService3, 0, 'L', 0, 1, '', '', true);
    }

    // Costo 3
    $reciboPDF->SetFont('helvetica', '', 13);
    $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
    $reciboPDF->SetXY(175, 149); // Posición x, posición y
    $reciboPDF->Cell(0, 10, "$".$costo3, 0, 1, '');

     // SUBTOTAL
     $reciboPDF->SetFont('helvetica', '', 11);
     $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
     $reciboPDF->SetXY(175, 172.5); // Posición x, posición y
     $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');

    if($addIva==0){
        // TOTAL FINAL
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 190); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$total, 0, 1, '');
    }else{
        // IVA
        $iva=($total*16)/100;
        $reciboPDF->SetFont('helvetica', '', 11);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 179.5); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$iva, 0, 1, '');

        // TOTAL FINAL
        $totalGlobal=$total+$iva;
        $reciboPDF->SetFont('helvetica', 'B', 14);
        $reciboPDF->SetTextColor(0, 0, 0); // Color blanco para el texto
        $reciboPDF->SetXY(175, 190); // Posición x, posición y
        $reciboPDF->Cell(0, 10, "$".$totalGlobal, 0, 1, '');
    }  
}

//GENERA ARCHIVO PDF
$reciboPDF->Output($root."docs/cotizaciones/".$fecha."-".$nombre.".pdf", 'F');

//Solo muestra el link cuando se envia por VER COTIZACION
if($verifyCot==1){
    echo "<a href='../../docs/cotizaciones/".$fecha.'-'.$nombre.".pdf' id='verCoti' target='_blank'>VER COTIZACIÓN</a>";   
    
}

?>


