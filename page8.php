<?php

// Page 8
$tplId = $pdf->importPage(8);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('ZapfDingbats', '', 10);
if($claim_prepare_935)
{
    insert_cell($pdf, $X = 12.4, $Y = 46, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'R', $fill = false);
}
else{
    insert_cell($pdf, $X = 12.4, $Y = 54, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'R', $fill = false);
}

$pdf->SetFont('Arial', '', 7);
$y= 104.5;
for($i=0;$i<10;$i++)
{
    insert_cell($pdf, $X = 12.4, $Y = $y, $CellWidth = 35, $CellHeight = 5, $text = mb_convert_encoding($name_claim_prepare_940[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    insert_cell($pdf, $X = 58, $Y = $pdf->GetY(), $CellWidth = 35, $CellHeight = 5, $text = mb_convert_encoding($business_no_945[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    insert_cell($pdf, $X = 93, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($billing_aggrement_code_950[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    insert_cell($pdf, $X = 115, $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($billing_percentage_955[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    insert_cell($pdf, $X = 129, $Y = $pdf->GetY(), $CellWidth = 50.5, $CellHeight = 5, $text = mb_convert_encoding($other_bill_Arrangements_960[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'C', $fill = false);
    insert_cell($pdf, $X = 183.5, $Y = $pdf->GetY(), $CellWidth = 25, $CellHeight = 5, $text = mb_convert_encoding(number_format($total_Fee_paid_payable_965[$i]), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
    $y=$y+4.4;
}
$total_Fee_paid_payable_965_sum=0;
foreach($total_Fee_paid_payable_965 as $value)
{
    $total_Fee_paid_payable_965_sum=$total_Fee_paid_payable_965_sum+$value;
}
insert_cell($pdf, $X = 183.5, $Y = $pdf->GetY()+5, $CellWidth = 25, $CellHeight = 5, $text = mb_convert_encoding(number_format($total_Fee_paid_payable_965_sum), 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 20, $Y = $pdf->GetY()+47.5, $CellWidth = 15, $CellHeight = 5, $text = mb_convert_encoding($signing_officer_of_the_corporation_970, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
