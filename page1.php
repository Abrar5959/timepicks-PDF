<?php
// Page 1
$tplId = $pdf->importPage(1);

$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);


$pdf->SetFont('Arial', '', 9);

insert_cell($pdf, $X = 15.5, $Y = 125, $CellWidth = 90, $CellHeight = 5, $text = mb_convert_encoding($name_010, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 25, $Y = $pdf->GetY() + 37.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($totalProjects_050, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 15.5, $Y = $pdf->GetY() + 12.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($financialPerson_100, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 115, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($tel_105, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 15.5, $Y = $pdf->GetY() + 12.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($technicalPerson_115, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 115, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($tel_120, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);

$x = 119.8;
for ($i = 0; $i < strlen($BN); $i++) {
    insert_cell($pdf, $X = $x, $Y = 129.7, $CellWidth = 5.05, $CellHeight = 5, $text = mb_convert_encoding($BN[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    $x = $pdf->GetX();
}
$x = 24.3;
for ($i = 0; $i < strlen($from_date); $i++) {
    insert_cell($pdf, $X = $x, $Y = 144, $CellWidth = 4.3, $CellHeight = 5, $text = mb_convert_encoding($from_date[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    $x = $pdf->GetX();
}
$x = 62.2;
for ($i = 0; $i < strlen($to_date); $i++) {
    insert_cell($pdf, $X = $x, $Y = 144, $CellWidth = 4.3, $CellHeight = 5, $text = mb_convert_encoding($to_date[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    $x = $pdf->GetX();
}


$pdf->SetFont('ZapfDingbats', '', 10);

if ($partnershipReturnFiles_151)
{
    insert_cell($pdf, $X = 174.5, $Y = 200, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
else{
    insert_cell($pdf, $X = 191, $Y = 200, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
