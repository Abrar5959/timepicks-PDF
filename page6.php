<?php


// Page 6
$tplId = $pdf->importPage(6);
$pdf->SetMargins(0, 0, 0);
$pdf->SetAutoPageBreak(0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('Arial', '', 8);

insert_cell($pdf, $X = 194, $Y = 38.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_unspecified_employee_300, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+10.6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_unspecified_employee_300, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+6.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_sub_total_814, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);



$y=$pdf->GetY()+52;
for($i=0;$i<5;$i++)
{
    insert_cell($pdf, $X = 9.9, $Y = $y, $CellWidth = 32.2, $CellHeight = 5, $text = mb_convert_encoding($specified_employee_name_850[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    insert_cell($pdf, $X = 42.7, $Y = $pdf->GetY(), $CellWidth = 32.2, $CellHeight = 5, $text = mb_convert_encoding(number_format($specified_employee_salary_852[$i]), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    insert_cell($pdf, $X = 75, $Y = $pdf->GetY(), $CellWidth = 20, $CellHeight = 5, $text = mb_convert_encoding(number_format($percentage_of_time_spent_854[$i]), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    insert_cell($pdf, $X = 97, $Y = $pdf->GetY(), $CellWidth = 26.4, $CellHeight = 5, $text = calculateAmount($specified_employee_salary_852[$i],$percentage_of_time_spent_854[$i],'','','off'), $border = 0, $alignment = 'R', $fill = false);
    insert_cell($pdf, $X = 124.3, $Y = $pdf->GetY(), $CellWidth = 24.8, $CellHeight = 5, $text = mb_convert_encoding(number_format(calculateResult($a[$i],$b[$i])), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    insert_cell($pdf, $X = 149.8, $Y = $pdf->GetY(), $CellWidth = 21.2, $CellHeight = 5, $text = calculateAmount($specified_employee_salary_852[$i],$percentage_of_time_spent_854[$i],$a[$i],$b[$i],'on'), $border = 0, $alignment = 'R', $fill = false);
    $y=$y+7.4;
}

insert_cell($pdf, $X = 149.8, $Y = $pdf->GetY()+7.6, $CellWidth = 21.2, $CellHeight = 5, $text = mb_convert_encoding(number_format(sumValues($sumSmallValues)), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 185.5, $Y = $pdf->GetY()-2.9, $CellWidth = 21.2, $CellHeight = 5, $text = mb_convert_encoding(number_format(sumValues($sumSmallValues)), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 185.5, $Y = $pdf->GetY()+6.3, $CellWidth = 21.2, $CellHeight = 5, $text = mb_convert_encoding(number_format(sumValues($sumSmallValues)+$unspecified_employee_300), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
$pdf->SetFont('Arial', '', 7);
$y=$pdf->GetY()+71.9;
for($i=0;$i<count($identification_code);$i++)
{
    insert_cell($pdf, $X = 15, $Y = $y, $CellWidth = 52.2, $CellHeight = 5, $text = mb_convert_encoding($identification_code[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    insert_cell($pdf, $X = 67.5, $Y = $pdf->GetY(), $CellWidth = 33.6, $CellHeight = 5, $text = mb_convert_encoding(number_format($salray_in_tax_year[$i]), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    $y=$y+7.4;
}

insert_cell($pdf, $X = 67.5, $Y = $pdf->GetY()+6.3, $CellWidth = 33.6, $CellHeight = 5, $text = mb_convert_encoding(number_format($total_salary_tax_years), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
