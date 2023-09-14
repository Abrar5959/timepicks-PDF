<?php

// Page 2
$tplId = $pdf->importPage(2);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('Arial', '', 9);
insert_cell($pdf, $X = 15, $Y = 34.2, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($project_title_200, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
$x = 23;
for ($i = 0; $i < strlen($project_start_date_202); $i++) {
    insert_cell($pdf, $X = $x, $Y = 43.8, $CellWidth = 5.1, $CellHeight = 5, $text = mb_convert_encoding($project_start_date_202[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    $x = $pdf->GetX();
}
$x = 84.7;
for ($i = 0; $i < strlen($completion_date_204); $i++) {
    insert_cell($pdf, $X = $x, $Y = $pdf->GetY(), $CellWidth = 5.1, $CellHeight = 5, $text = mb_convert_encoding($completion_date_204[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    $x = $pdf->GetX();
}
insert_cell($pdf, $X = 132, $Y = $pdf->GetY() + 3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($field_of_science_206 . '      ' . $technology_code_206, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
// Set the line position and length
$x = 147.5; // X-coordinate
$y1 = 46.3; // Starting Y-coordinate
$y2 = 50.8; // Ending Y-coordinate
$lineWidth = 0.2; // Line width (adjust as needed)

// Set the line color (0-255 for RGB)
$pdf->SetDrawColor(0, 0, 0); // Black

// Draw the vertical line
$pdf->SetLineWidth($lineWidth);
$pdf->Line($x, $y1, $x, $y2);
$pdf->SetFont('ZapfDingbats', '', 10);
if (isset($previously_claimed_project_208)) {
    insert_cell($pdf, $X = 17.3, $Y = $pdf->GetY() + 10, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if (isset($first_claimed_project_210)) {
    insert_cell($pdf, $X = 102.5, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if ($collaboration_with_other_businesses_218) {
    insert_cell($pdf, $X = 176.1, $Y = $pdf->GetY() + 7.7, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
} else {
    insert_cell($pdf, $X = 192, $Y = $pdf->GetY() + 7.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}

$pdf->SetFont('Arial', '', 6);
insert_multicell($pdf, $X = 8, $Y = 112, $CellWidth = 200, $CellHeight = 5, $text = $overcome_scientific_uncertainties_242, $border = 1, $alignment = 'L', $fill = false);
insert_multicell($pdf, $X = 8, $Y = 144, $CellWidth = 200, $CellHeight = 5, $text = $work_performed_tax_year_244, $border = 1, $alignment = 'L', $fill = false);
insert_multicell($pdf, $X = 8, $Y = 233, $CellWidth = 200, $CellHeight = 5, $text = $scientific_advancements_attempt_to_acheive_result_246, $border = 1, $alignment = 'L', $fill = false);
