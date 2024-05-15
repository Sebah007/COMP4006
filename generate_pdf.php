<?php
require_once('fpdf/fpdf.php'); // Adjust the path to the FPDF library
require_once('CurriculumVitae.php'); // Adjust the path to CurriculumVitae class

// Instantiate CurriculumVitae class
$cv = new CurriculumVitae();
// load CV data here (depending on how your CurriculumVitae class is set up)

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Example of adding content to the PDF, adjust based on CV's structure
$pdf->Cell(0, 10, "Name: " . $cv->personalInfo->name, 0, 1);
// Add more CV details as needed...

// Output the PDF to the browser, prompting a download
$pdf->Output('D', 'CV.pdf');
?>
