<?php
//============================================================+
// File name   : genpdf-DP.php
//
// Description : Zadanie z generowania pliku
//               .PDF przy użyciu TCPDF
//
// Author: Pęczak Damian
//
// (c) Copyright:
//               Pęczak Damian
//               https://github.com/PeczakDamian
//               damianpeczak2003@gmail.com
//============================================================+

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A5', true, 'UTF-8', false);

$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Pęczak Damian');
$pdf->setTitle('GenPDF DP');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

$pathTTFFile = '../fonts/Lato-Regular.ttf';
$fontname = TCPDF_FONTS::addTTFfont($pathTTFFile, 'TrueTypeUnicode', '', 32);
$pdf->AddFont('lato', '', 'lato.php');
$pdf->SetFont('lato', '', 20);

$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

$pdf->AddPage();
$pdf->Image('images/pobrane.png', 2, 2, 44, 40, '', '', '', false, 300, '', false, false, false, false, false, false);
$html = "<b><p style='font-size: 20px;'>Zespół Szkół Elektrycznych</p></b>";
$pdf->writeHTMLCell(0, 0, 49, 0, $html, 0, 1, 0, true, '', true);
$html = "<p style='font-size: 16px;'>3PT4 Pęczak Damian</p>";
$pdf->writeHTMLCell(0, 0, 59, 25, $html, 0, 1, 0, true, '', true);
$html = '<p style="text-decoration: underline; font-size: 12px"><b>Znane mi technologie Web:</b></p>
<ul style="font-size: 12px">
    <li>HTML5, CSS3, ES6</li>
    <li>Joomla, WordPress, PrestaShop</li>
    <li>Node.js i React</li>
    <li><a href="https://www.google.com">Więcej</a></li>
</ul>';
$pdf->writeHTMLCell(0, 0, 40, 50, $html, 0, 1, 0, true, '', true);

$pdf->Output('genpdf-DP.pdf', 'I');