<?php

// Page 9
$tplId = $pdf->importPage(9);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('Arial', '', 8);
insert_cell($pdf, $X = 175, $Y = 27.3, $CellWidth = 15, $CellHeight = 5, $text = $date_170, $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 15.2, $Y = 27.3, $CellWidth = 15, $CellHeight = 5, $text = mb_convert_encoding($signing_officer_of_the_corporation_165, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 15.2, $Y = $pdf->GetY()+15.2, $CellWidth = 15, $CellHeight = 5, $text = mb_convert_encoding($person_complete_the_form_175, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
