
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Page 1 variables
$sumSmallValues=array();

$name_010 = 'Haywood Technologie Financière Inc.';
$BN = '202305312344334';
$to_date    = '2023053';
$from_date  = '2023053';
$totalProjects_050 = '30';
$financialPerson_100 = 'Makram Elkebti financial';
$technicalPerson_115 = 'Makram Elkebti';
$tel_105 = '(511) 962-0499';
$tel_120 = '(512) 962-0499';
$partnershipReturnFiles_151 = 1; // checkbox (values : 0 or 1)

// Page 2 variables
$project_title_200 = 'Log less data rollback-risk management';
$project_start_date_202 = '202303';
$completion_date_204 = '202303';
$field_of_science_206 = '1.02.01';
$technology_code_206 = 'Computer sciences';
$previously_claimed_project_208 = 1; // checkbox (values : 0 or 1)
$first_claimed_project_210 = 1; // checkbox (values : 0 or 1)
$collaboration_with_other_businesses_218 = 0; // checkbox (values : 0 or 1)
$overcome_scientific_uncertainties_242 = "The rapid advancement of technology in recent years has fundamentally transformed various aspects of our lives. From communication to healthcare, education to entertainment, the digital age has brought about unprecedented changes that continue to shape our world. One of the most notable developments is the widespread adoption of smartphones, which have become ubiquitous tools for staying connected and accessing information. Smartphones have revolutionized communication by making it easier than ever to reach out to friends, family, and colleagues regardless of geographical boundaries. Social media platforms and messaging apps have allowed people to stay in constant contact, sharing their thoughts, experiences, and photos with a global audience. Additionally, the availability of video calls has bridged the gap between distant loved ones, providing a sense of connection during challenging times. In the field of healthcare, technology has played a crucial role in improving patient care and diagnostics.";
$work_performed_tax_year_244 = "Artificial intelligence (AI) has captivated the imagination of scientists, engineers, and writers for decades. It represents our quest to replicate human intelligence in machines, a journey that has transformed our world. Today, AI is an integral part of our daily lives, touching everything from our smartphones to our healthcare systems. As AI seeks to create systems and machines capable of tasks requiring human-like intelligence. These tasks encompass problem-solving, language comprehension, pattern recognition, and data-driven decision-making. AI's development thrives on the surge in computing power and the abundance of data, both crucial for training AI algorithms. Machine learning, a subset of AI, has gained immense popularity recently. It involves training algorithms to improve their performance on specific tasks by learning from data. This approach has led to breakthroughs in areas such as image and speech recognition, natural language processing, and autonomous vehicles. Machine learning powers recommendation systems, virtual assistants, and predictive analytics in diverse industries. Deep learning, a subfield of machine learning, has been particularly influential. It employs artificial neural networks inspired by the human brain. Deep learning has revolutionized computer vision, enabling machines to identify objects in images and videos with remarkable accuracy. It underpins facial recognition, self-driving cars, and medical image analysis. The impact of AI on healthcare is profound. Medical professionals increasingly rely on AI for diagnostics, drug discovery, and personalized treatments. Machine learning analyzes extensive medical data to detect diseases earlier and more accurately. In drug discovery, AI accelerates the identification of potential candidates, reducing costs and speeding up development. Natural language processing is another exciting AI application. It enables machines to understand, interpret, and generate human language. Chatbots and virtual assistants simplify interactions with computers. NLP also plays a crucial role in sentiment analysis, allowing companies to gauge public opinion through social media and customer reviews. The integration of AI into industries poses challenges and ethical concerns. AI in decision-making raises questions about bias and fairness, as algorithms may inherit biases present in training data. Ensuring fairness and transparency is an ongoing challenge requiring regulation and oversight. Privacy is a significant concern. Collecting and analyzing personal data for AI applications prompts questions about data security and individual rights. Striking a balance between AI's benefits and privacy protection demands collaboration between policymakers and technology companies. Despite challenges, AI's potential to drive innovation and improve our lives is undeniable. From autonomous vehicles enhancing road safety to AI-driven healthcare solutions revolutionizing patient care, the possibilities are vast. Ethical principles, accountability, and ongoing research are essential as we develop AI to address complex issues. In conclusion, artificial intelligence, once a theoretical concept, has become a practical reality shaping our world. Its impact spans industries, from healthcare and finance to entertainment and transportation.";
$scientific_advancements_attempt_to_acheive_result_246 = "The rapid advancement of technology in recent years has fundamentally transformed various aspects of our lives. From communication to healthcare, education to entertainment, the digital age has brought about unprecedented changes that continue to shape our world. One of the most notable developments is the widespread adoption of smartphones, which have become ubiquitous tools for staying connected and accessing information. Smartphones have revolutionized communication by making it easier than ever to reach out to friends, family, and colleagues regardless of geographical boundaries. Social media platforms and messaging apps have allowed people to stay in constant contact, sharing their thoughts, experiences, and photos with a global audience. Additionally, the availability of video calls has bridged the gap between distant loved ones, providing a sense of connection during challenging times. In the field of healthcare, technology has played a crucial role in improving patient care and diagnostics.";

// Page 3 variables
$employee_directly_involved_253 = 1;  // checkbox (values : 0 or 1)
$other_employee_of_company_255 = 1;  // checkbox (values : 0 or 1)
$external_consultant_257 = 1; // checkbox (values : 0 or 1)
$claiming_salary_265 = 1; // checkbox (values : 0 or 1)
$claiming_expenditures_266 = 1; // checkbox (values : 0 or 1)
$claiming_expenditures_performed_by_other_peoples_267 = 1; // checkbox (values : 0 or 1)
$project_planning_documents_270 = 1; // checkbox (values : 0 or 1)
$record_resources_allocate_to_project_271 = 1; // checkbox (values : 0 or 1)
$design_of_experiments_272 = 1;  // checkbox (values : 0 or 1)
$records_laboratory_notebooks_273 = 1; // checkbox (values : 0 or 1)
$design_architecture_souceCode_274 = 1; // checkbox (values : 0 or 1)
$trial_run_record_275 = 1; // checkbox (values : 0 or 1)
$progress_reports_project_meetings_276 = 1; // checkbox (values : 0 or 1)
$test_protocols_data_analysis_conclusions_277 = 1; // checkbox (values : 0 or 1)
$photographs_and_videos_278 = 1; // checkbox (values : 0 or 1)
$Samples_prototypes_scrap_other_artefacts_279 = 1; // checkbox (values : 0 or 1)
$contracts_280 = 1; // checkbox (values : 0 or 1)
$others_specify_281 = 1; // checkbox (values : 0 or 1)
$field_282 = 'sample text for the field';

$part2_name1_254='Makram El Kebti, Zubair Ali Mansoor';
$part2_name2_256='John Doe';
$part2_name3_258='Islam Ahmed';
$firm_259="Les entreprises Timepicks";
$directly_involved_name_260=array('Zubair Ali Mansoor','Makram El Kebti','Makram El Kebti');
$directly_involved_Qualifications_261=array('MSc. Comp. Sci, 15 years exp. In Soft/2 IEEE publications/Lead Engineer','Bach. Comm, 20 years exp. in HFT system development/President','Bach. Comm, 20 years exp. in HFT system development/President');


// Page 4 variables
$use_proxy_method_160 = 1; // checkbox (values : 0 or 1)
$use_traditional_method_162 = 1; // checkbox (values : 0 or 1)

$unspecified_employee_300 = 158752;
$specified_employee_305 = 13505;

$formatted_unspecified_employee_300 = number_format($unspecified_employee_300);
$formatted_specified_employee_305 = number_format($specified_employee_305);
$total_306 = $unspecified_employee_300 + $specified_employee_305;
$formatted_total1 = number_format($total_306);

$unspecified_employee_outside_canada_307 = 1582;
$specified_employee_outside_canada_309 = 13505;
$salary_or_wages_identified_310 = 13505;
$salary_or_wages_incurred_315 = 13505;
$cost_of_materials_consumed_in_performing_SR_ED_320 = 8979;
$cost_of_materials_transformed_in_performing_SR_ED_325 = 8979;
$arms_length_contracts_340 = 8979;
$non_arms_length_contracts_345 = 8979;
$overhead_and_other_expenditure_360 = 8979;
$third_party_payments_370 = 8979;

$formatted_unspecified_employee_outside_canada_307 = number_format($unspecified_employee_outside_canada_307);
$formatted_specified_employee_outside_canada_309 = number_format($specified_employee_outside_canada_309);
$formatted_salary_or_wages_identified_310 = number_format($salary_or_wages_identified_310);
$formatted_salary_or_wages_incurred_315 = number_format($salary_or_wages_incurred_315);
$formatted_cost_of_materials_consumed_in_performing_SR_ED_320 = number_format($cost_of_materials_consumed_in_performing_SR_ED_320);
$formatted_cost_of_materials_transformed_in_performing_SR_ED_325 = number_format($cost_of_materials_transformed_in_performing_SR_ED_325);
$formatted_arms_length_contracts_340 = number_format($arms_length_contracts_340);
$formatted_non_arms_length_contracts_345 = number_format($non_arms_length_contracts_345);
$formatted_overhead_and_other_expenditure_360 = number_format($overhead_and_other_expenditure_360);
$formatted_third_party_payments_370 = number_format($third_party_payments_370);

$total_allowable_SR_ED_expenditures_380 =   $unspecified_employee_outside_canada_307                  + 
                                        $specified_employee_outside_canada_309                    +
                                        $salary_or_wages_identified_310                           +
                                        $cost_of_materials_consumed_in_performing_SR_ED_320       +
                                        $cost_of_materials_transformed_in_performing_SR_ED_325    +
                                        $arms_length_contracts_340                                +
                                        $non_arms_length_contracts_345                            +
                                        $overhead_and_other_expenditure_360                       +
                                        $third_party_payments_370;
                                        
$formatted_total_allowable_SR_ED_expenditures_380 = number_format($total_allowable_SR_ED_expenditures_380);

$amount_from_line380_420 = $formatted_total_allowable_SR_ED_expenditures_380;



$provincial_government_assistance_for_expenditure_429 = 3345;
$other_government_assistance_for_expenditue_431 = 4435;
$non_government_assistance_for_expenditue_432 = 5354;
$SR_ED_applied_and_refunded_435 = 254;
$sale_SR_ED_capital_assets_440 = 235;

$sub_total_442 =    $total_allowable_SR_ED_expenditures_380 - 
                    $provincial_government_assistance_for_expenditure_429 - 
                    $other_government_assistance_for_expenditue_431 - 
                    $non_government_assistance_for_expenditue_432 - 
                    $SR_ED_applied_and_refunded_435 - 
                    $sale_SR_ED_capital_assets_440;

$formatted_provincial_government_assistance_for_expenditure_429 = number_format($provincial_government_assistance_for_expenditure_429);
$formatted_other_government_assistance_for_expenditue_431 = number_format($other_government_assistance_for_expenditue_431);
$formatted_non_government_assistance_for_expenditue_432 = number_format($non_government_assistance_for_expenditue_432);
$formatted_SR_ED_applied_and_refunded_435 = number_format($SR_ED_applied_and_refunded_435);
$formatted_sale_SR_ED_capital_assets_440 = number_format($sale_SR_ED_capital_assets_440);

$formatted_sub_total_442 = number_format($sub_total_442);


$repayments_assistance__previously_reduced_expenditure_pool_445 = 324;
$prior_year_pool_balance_of_deductible_expenditures_450 = 10;
$expenditure_pool_transfer_from_amalgamation_or_windup_452 = 10;
$amount_of_SR_ED_recaptured_in_the_prior_year_453 = 23;

$amount_available_for_deduction_455 =   $sub_total_442 + 
                                        $repayments_assistance__previously_reduced_expenditure_pool_445 +
                                        $prior_year_pool_balance_of_deductible_expenditures_450 +
                                        $expenditure_pool_transfer_from_amalgamation_or_windup_452 +
                                        $amount_of_SR_ED_recaptured_in_the_prior_year_453;


$formatted_repayments_assistance__previously_reduced_expenditure_pool_445 = number_format($repayments_assistance__previously_reduced_expenditure_pool_445);
$formatted_prior_year_pool_balance_of_deductible_expenditures_450 = number_format($prior_year_pool_balance_of_deductible_expenditures_450);
$formatted_expenditure_pool_transfer_from_amalgamation_or_windup_452 = number_format($expenditure_pool_transfer_from_amalgamation_or_windup_452);
$formatted_amount_of_SR_ED_recaptured_in_the_prior_year_453 = number_format($amount_of_SR_ED_recaptured_in_the_prior_year_453);

$formatted_amount_available_for_deduction_455 = number_format($amount_available_for_deduction_455);
                    
$deduction_claimed_in_the_year_460 = 3453;
$pool_balance_of_deductible_SR_ED_expenditures_carried_forward_470 = $amount_available_for_deduction_455 + $deduction_claimed_in_the_year_460;
$formatted_deduction_claimed_in_the_year_460 = number_format($deduction_claimed_in_the_year_460);
$formatted_pool_balance_of_deductible_SR_ED_expenditures_carried_forward_470 = number_format($pool_balance_of_deductible_SR_ED_expenditures_carried_forward_470);

// Page 5 variables
$total_allowable_SR_ED_expenditures_492 = $total_allowable_SR_ED_expenditures_380;
$payment_of_prior_years_unpaid_amounts_500 = 100;
$prescribed_proxy_amount_502 = 130;
$qualified_expenditures_transferred_to_you_508 = 130;
$sub_total_511 =    $total_allowable_SR_ED_expenditures_492 +
                    $payment_of_prior_years_unpaid_amounts_500 +
                    $prescribed_proxy_amount_502 +
                    $qualified_expenditures_transferred_to_you_508;

$formatted_total_allowable_SR_ED_expenditures_492 = number_format($total_allowable_SR_ED_expenditures_492);
$formatted_payment_of_prior_years_unpaid_amounts_500 = number_format($payment_of_prior_years_unpaid_amounts_500);
$formatted_prescribed_proxy_amount_502 = number_format($prescribed_proxy_amount_502);
$formatted_qualified_expenditures_transferred_to_you_508 = number_format($qualified_expenditures_transferred_to_you_508);
$formatted_sub_total_511 = number_format($sub_total_511);



$provincial_government_assistance_513=3667;
$other_government_assistance_515=3667;
$non_government_assistance_517=3667;
$current_expenditures_520 = 345;
$amounts_paid_80_percent_528 = 234;
$amounts_20_percent_529 = 234;
$prescribed_expenditures_not_allowed_by_regulations_530 = 345;
$other_deductions_533 = 345;
$assistance_allocated_to_you_538  =433;
$expenditures_for_non_arm_length_contracts_541 = 230;
$adjustments_to_purchases_542 = 34;
$qualified_expenditures_you_transferred_544 = 343;

$qualified_SR_ED_expenditures_559 = $sub_total_511 -
                                    $provincial_government_assistance_513 -
                                    $other_government_assistance_515 -
                                    $non_government_assistance_517 -
                                    $current_expenditures_520 -
                                    $amounts_paid_80_percent_528 -
                                    $amounts_20_percent_529 -
                                    $prescribed_expenditures_not_allowed_by_regulations_530 -
                                    $other_deductions_533 -
                                    $assistance_allocated_to_you_538 -
                                    $expenditures_for_non_arm_length_contracts_541 -
                                    $adjustments_to_purchases_542 -
                                    $qualified_expenditures_you_transferred_544;


$formatted_provincial_government_assistance_513 = number_format($provincial_government_assistance_513);
$formatted_other_government_assistance_515 = number_format($other_government_assistance_515);
$formatted_non_government_assistance_517 = number_format($non_government_assistance_517);
$formatted_current_expenditures_520 = number_format($current_expenditures_520);
$formatted_amounts_paid_80_percent_528 = number_format($amounts_paid_80_percent_528);
$formatted_amounts_20_percent_529 = number_format($amounts_20_percent_529);
$formatted_prescribed_expenditures_not_allowed_by_regulations_530 = number_format($prescribed_expenditures_not_allowed_by_regulations_530);
$formatted_other_deductions_533 = number_format($other_deductions_533);
$formatted_expenditures_for_non_arm_length_contracts_541 =  number_format($expenditures_for_non_arm_length_contracts_541);
$formatted_adjustments_to_purchases_542 =  number_format($adjustments_to_purchases_542);
$formatted_qualified_expenditures_you_transferred_544 =  number_format($qualified_expenditures_you_transferred_544);
$formatted_qualified_SR_ED_expenditures_559 =  number_format($qualified_SR_ED_expenditures_559);

$repayments_of_assistance_and_contract_payments_made_560 = 34;
$total_qualified_SR_ED_expenditures_570 = $qualified_SR_ED_expenditures_559 + $repayments_of_assistance_and_contract_payments_made_560;

$formatted_repayments_of_assistance_and_contract_payments_made_560 =  number_format($repayments_of_assistance_and_contract_payments_made_560);
$formatted_total_qualified_SR_ED_expenditures_570 =  number_format($total_qualified_SR_ED_expenditures_570);



// $subTotal=$total_306-$provincial_government_assistance_513;
// $formatted_subTotal=number_format($subTotal);
// $un_traditional_method=94741;
// $formatted_un_traditional_method = number_format($un_traditional_method);
// $total_expenditures_transferred_to_you=$un_traditional_method+$total_306;
// $formatted_total_expenditures_transferred_to_you = number_format($total_expenditures_transferred_to_you);
// $provincial_government_assistance=36677;
// $formatted_provincial_government_assistance=number_format($provincial_government_assistance);
// $Qualified_SR_ED_expenditures=$total_expenditures_transferred_to_you-$provincial_government_assistance;
// $formatted_Qualified_SR_ED_expenditures=number_format($Qualified_SR_ED_expenditures);


// Page 6 variables


$salary_or_wages_of_employees_other_than_specified_employee_810 = $unspecified_employee_300;
$bonuses_remuneration_based_on_profits_and_taxable_benefits_812 = 345;
$sub_total_814 = $salary_or_wages_of_employees_other_than_specified_employee_810 - $bonuses_remuneration_based_on_profits_and_taxable_benefits_812;

$formatted_salary_or_wages_of_employees_other_than_specified_employee_810 = number_format($salary_or_wages_of_employees_other_than_specified_employee_810);
$formatted_bonuses_remuneration_based_on_profits_and_taxable_benefits_812 = number_format($bonuses_remuneration_based_on_profits_and_taxable_benefits_812);
$formatted_sub_total_814 = number_format($sub_total_814);


$specified_employee_name_850=array('Makram El Kebti','Employee 2','Employee 3','Employee 4','Employee 5');
$specified_employee_salary_852=array(30,40,50,60,70);
$percentage_of_time_spent_854=array('44','55','66','77','88');
$a=array(23,23,23,23,23);
$b=array(34,33,34,34,34);

$identification_code=array('Log less data rollback-risk management','Multi-Tenant Cus','Multiplex time series compression','Log less data rollback-risk management','Multi-Tenant Cus');
$salray_in_tax_year=array(1000,2000,3000,4000,5000);
$total_salary_tax_years=0;
foreach($salray_in_tax_year as $amount)
{
    $total_salary_tax_years=$total_salary_tax_years+$amount;
}

$line307=$unspecified_employee_outside_canada_307;
$line309=$specified_employee_outside_canada_309;
$line340=$arms_length_contracts_340;
$line345=$non_arms_length_contracts_345;
$line370=$third_party_payments_370;
$expenditure_in_canada_605 = 3454;
$expenditure_in_canada_605=$expenditure_in_canada_605-($line307+$line309+$line340+$line345+$line370);


$internal_600 =100;
$parent_companies_subsidiaries_affiliated_companies_602 = 234;
$parent_companies_subsidiaries_affiliated_companies_604 = 987;
$federal_grants_606 = 234;
$federal_contracts_608 = 434;
$provincial_funding_610 = 344;
$SR_ED_contract_work_performed_for_other_companies_612 = 345;
$SR_ED_contract_work_performed_for_other_companies_614 = 345;
$other_funding_616 = 342;
$other_funding_618 = 342;




$scientists_and_engineers_632=2;
$technologists_and_technicians_634=30;
$managers_and_administrator_636=30;
$other_technical_supporting_staff_638=30;

$basic_or_applied_research_620=1;
$experimental_development_622=1;

$part8_claim_checkList=array(1,1,1,1,1,1,1,1,1);

// Page 8 variables
$claim_prepare_935 = 0;
$name_claim_prepare_940=array('Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks','Les entreprise timepicks');
$business_no_945=array('84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001','84510 8083 RT0001');
$billing_aggrement_code_950=array(4,4,4,4,4,4,4,4,4,4);
$billing_percentage_955=array(8000.00,8000.00,8000.00,8000.00,8000.00,8000.00,8000.00,8000.00,8000.00,8000.00);
$other_bill_Arrangements_960=array('etc','etc','etc','etc','etc','etc','etc','etc','etc','etc');
$total_Fee_paid_payable_965=array(8000,8000,8000,8000,8000,8000,8000,8000,8000,8000);
$signing_officer_of_the_corporation_970 = 'Makram Elkebti';

// Page 9 variables
$signing_officer_of_the_corporation_165='Makram Elkebti';
$date_170 = date("d/n/Y");
$person_complete_the_form_175='Dufour Charbonneau Brunet & Associés Inc.';





function calculateAmount($valueInColumn2, $percentageInColumn3,$a=0,$b=0,$get_smaller_amount) {
    if($get_smaller_amount=='off')
    {
        return number_format($valueInColumn2 * ($percentageInColumn3 / 100));
    }
    else{
        return getSmallerAmount($a,$b,$valueInColumn2 * ($percentageInColumn3 / 100));
    }
}
function calculateResult($A, $B) {
    return (2.5 * $A * $B) / 365;
}
function getSmallerAmount($a,$b,$c)
{
    global $sumSmallValues;
    $column5= (2.5 * $a * $b) / 365;
    $c4=$c;
    if($column5>$c4)
    {
        // echo "hello";
        array_push($sumSmallValues,$c4);
        return number_format($c4);
    }
    else{
        // echo "hi";
        array_push($sumSmallValues,$column5);
        return number_format($column5);
    }
}
function sumValues($sumSmallValues,$sum=0)
{
    foreach ($sumSmallValues as $value) {
        $sum += $value;
    }
    return $sum;
}

include('extension.php');

// include('../fpdf/fpdf.php');
$pdf = new PDFi();
// set the source file
$pdf->setSourceFile("templates/template.pdf");

include('page1.php');
include('page2.php');
include('page3.php');
include('page4.php');
include('page5.php');
include('page6.php');
include('page7.php');
include('page8.php');
include('page9.php');

$pdf->Output();