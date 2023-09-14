<?php


// Page 5
$tplId = $pdf->importPage(5);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('Arial', '', 9);

insert_cell($pdf, $X = 194, $Y = 25.6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_total_allowable_SR_ED_expenditures_492, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+8.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_payment_of_prior_years_unpaid_amounts_500, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_prescribed_proxy_amount_502, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_qualified_expenditures_transferred_to_you_508, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_sub_total_511, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);



insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+9, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_provincial_government_assistance_513, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_other_government_assistance_515, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_non_government_assistance_517, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_current_expenditures_520, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_amounts_paid_80_percent_528, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.2, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_amounts_20_percent_529, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_prescribed_expenditures_not_allowed_by_regulations_530, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_other_deductions_533, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+7.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($assistance_allocated_to_you_538, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_expenditures_for_non_arm_length_contracts_541, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_adjustments_to_purchases_542, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_qualified_expenditures_you_transferred_544, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_qualified_SR_ED_expenditures_559, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+10, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_repayments_of_assistance_and_contract_payments_made_560, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_total_qualified_SR_ED_expenditures_570, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

