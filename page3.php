<?php
// Page 3
$tplId = $pdf->importPage(3);
$pdf->SetMargins(0, 0, 0);
// add a page
$pdf->AddPage("P", "letter", 0);

// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplId);
$pdf->SetFont('ZapfDingbats', '', 10);
if($employee_directly_involved_253)
{
    insert_cell($pdf, $X = 16, $Y = 31.8, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($other_employee_of_company_255)
{
    insert_cell($pdf, $X = 16, $Y = 40, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($external_consultant_257)
{
    insert_cell($pdf, $X = 16, $Y = $pdf->GetY()+9, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}



if($claiming_salary_265)
{
    insert_cell($pdf, $X = 178.5, $Y = $pdf->GetY()+36.7, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
else{
    insert_cell($pdf, $X = 194.8, $Y = $pdf->GetY()+36.7, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($claiming_expenditures_266)
{
    insert_cell($pdf, $X = 178.5, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
else{
    insert_cell($pdf, $X = 194.8, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($claiming_expenditures_performed_by_other_peoples_267)
{
    insert_cell($pdf, $X = 178.5, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
else{
    insert_cell($pdf, $X = 194.8, $Y = $pdf->GetY()+5.4, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($project_planning_documents_270)
{
    insert_cell($pdf, $X = 16, $Y = 131, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($record_resources_allocate_to_project_271)
{
    insert_cell($pdf, $X = 16, $Y = 136.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($design_of_experiments_272)
{
    insert_cell($pdf, $X = 16, $Y = 141.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($records_laboratory_notebooks_273)
{
    insert_cell($pdf, $X = 16, $Y = 146.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($design_architecture_souceCode_274)
{
    insert_cell($pdf, $X = 16, $Y = 151.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($trial_run_record_275)
{
    insert_cell($pdf, $X = 16, $Y = 156.3, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}

if($progress_reports_project_meetings_276)
{
    insert_cell($pdf, $X = 101, $Y = 131.2, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($test_protocols_data_analysis_conclusions_277)
{
    insert_cell($pdf, $X = 101, $Y = 136.6, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($photographs_and_videos_278)
{
    insert_cell($pdf, $X = 101, $Y = 141.6, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($Samples_prototypes_scrap_other_artefacts_279)
{
    insert_cell($pdf, $X = 101, $Y = 146.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($contracts_280)
{
    insert_cell($pdf, $X = 101, $Y = 151.5, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}
if($others_specify_281)
{
    insert_cell($pdf, $X = 101, $Y = 156.3, $CellWidth = 13, $CellHeight = 5, $text = 5, $border = 0, $alignment = 'L', $fill = false);
}

$pdf->SetFont('Arial', '', 8);

insert_cell($pdf, $X = 135,    $Y = 156.3, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($field_282, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);

insert_cell($pdf, $X = 82.8,    $Y = 33.9, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($part2_name1_254, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 82.8,    $Y = $pdf->GetY()+8, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($part2_name2_256, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 82.8,    $Y = $pdf->GetY()+9, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($part2_name3_258, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
insert_cell($pdf, $X = 164.5,   $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($firm_259, 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
$y= $pdf->GetY()+14.3;
for($i=0;$i<3;$i++)
{
    insert_cell($pdf, $X = 12.5,    $Y = $y, $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($directly_involved_name_260[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    insert_cell($pdf, $X = 109,     $Y = $pdf->GetY(), $CellWidth = 13, $CellHeight = 5, $text = mb_convert_encoding($directly_involved_Qualifications_261[$i], 'ISO-8859-1', 'UTF-8'), $border = 0, $alignment = 'L', $fill = false);
    $y=$y+6.3;
}

