<?php



// Page 7
$tplId = $pdf->importPage(7);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('Arial', '', 9);
insert_cell($pdf, $X = 194, $Y = 18, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($expenditure_in_canada_605), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 158.5, $Y = 40, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($internal_600), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($parent_companies_subsidiaries_affiliated_companies_602), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($parent_companies_subsidiaries_affiliated_companies_604), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+5.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($federal_grants_606), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+5.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($federal_contracts_608), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+5.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($provincial_funding_610), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($SR_ED_contract_work_performed_for_other_companies_612), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($SR_ED_contract_work_performed_for_other_companies_614), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 158.5, $Y = $pdf->GetY()+6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($other_funding_616), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($other_funding_618), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);


$pdf->SetFont('ZapfDingbats', '', 10);
if($basic_or_applied_research_620)
{
    insert_cell($pdf, $X = 8.7, $Y = 88.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'R', $fill = false);
}
if($experimental_development_622)
{
    insert_cell($pdf, $X = 117.7, $Y = 88.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'R', $fill = false);
}


$pdf->SetFont('Arial', '', 9);
insert_cell($pdf, $X = 194, $Y = 98.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($scientists_and_engineers_632), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($technologists_and_technicians_634), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($managers_and_administrator_636), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding(number_format($other_technical_supporting_staff_638), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);


$pdf->SetFont('ZapfDingbats', '', 10);
$y=143.2;
for($i=0;$i<9;$i++)
{
    if($part8_claim_checkList[$i])
    {
        insert_cell($pdf, $X = 183.3, $Y = $y, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'R', $fill = false);
    }
    if($i==4)
    {
        $y=$y+7.8;        
    }
    else if($i==3)
    {
        $y=$y+0.3;        
    }
    $y=$y+5.7;
}
$pdf->SetFont('Arial', '', 9);
