<?php


// Page 4
$tplId = $pdf->importPage(4);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('ZapfDingbats', '', 10);
if($use_proxy_method_160)
{
    insert_cell($pdf, $X = 17, $Y = 35, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($use_traditional_method_162)
{
    insert_cell($pdf, $X = 17, $Y = 44, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
$pdf->SetFont('Arial', '', 9);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+24, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_unspecified_employee_300, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.9, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_specified_employee_305, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($total_306, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.4, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_unspecified_employee_outside_canada_307, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_specified_employee_outside_canada_309, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+7.6, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_salary_or_wages_identified_310, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 155, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_salary_or_wages_incurred_315, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_cost_of_materials_consumed_in_performing_SR_ED_320, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_cost_of_materials_transformed_in_performing_SR_ED_325, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+9, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_arms_length_contracts_340, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_non_arms_length_contracts_345, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_overhead_and_other_expenditure_360, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_third_party_payments_370, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_total_allowable_SR_ED_expenditures_380, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);


insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+26, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($amount_from_line380_420, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+10, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_provincial_government_assistance_for_expenditure_429, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_other_government_assistance_for_expenditue_431, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_non_government_assistance_for_expenditue_432, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_SR_ED_applied_and_refunded_435, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_sale_SR_ED_capital_assets_440, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_sub_total_442, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);


insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+10.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_repayments_assistance__previously_reduced_expenditure_pool_445, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_prior_year_pool_balance_of_deductible_expenditures_450, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_expenditure_pool_transfer_from_amalgamation_or_windup_452, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+4.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_amount_of_SR_ED_recaptured_in_the_prior_year_453, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+5.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_amount_available_for_deduction_455, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);


insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+7, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_deduction_claimed_in_the_year_460, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);
insert_cell($pdf, $X = 194, $Y = $pdf->GetY()+8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($formatted_pool_balance_of_deductible_SR_ED_expenditures_carried_forward_470, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'R', $fill = false);

