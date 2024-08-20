<?php
for ($i=0; $i < 9; $i++) { 
	//   echo  $i."<br>";
;}
// exit;
$jj = '[{"HoursBefore":"960","Penalty":{"Value":"15.28","Type":2,"PaymentType":1,"Currency":"EUR"}},{"HoursBefore":"576","Penalty":{"Value":"38.20","Type":2,"PaymentType":1,"Currency":"EUR"}},{"HoursBefore":"360","Penalty":{"Value":"76.40","Type":2,"PaymentType":1,"Currency":"EUR"}},{"HoursBefore":"240","Penalty":{"Value":"114.59","Type":2,"PaymentType":1,"Currency":"EUR"}},{"HoursBefore":"120","Penalty":{"Value":"152.79","Type":2,"PaymentType":1,"Currency":"EUR"}}]';

$checkIn  = date("Y-m-d",strtotime('2023-05-02'));
$pt_logged_customer = 5;
$vervotechhObj = json_decode($jj);
$vervotechh = new stdClass;
$vervotechh->price = 12218.610;
$refundability_status = "Non Refundable";
$vervotechh->cancellation_to = array();
$vervotechh->cancellation_from = array();
$vervotechh->cancellation_amount = array();
p($vervotechhObj,0);
$vervotechhObjNew = array();
$x = 0;
// foreach ($vervotechhObj as $SmyCancelationObj) {
// 	$x++;
// 	$smyHoursBeforeCancel = $SmyCancelationObj->HoursBefore;
// 	$smyNextHoursBeforeCancel = isset($vervotechhObj[$x]->HoursBefore) ? $vervotechhObj[$x]->HoursBefore : 0;
// 	$SmyCancelationObj->Penalty->from = $smyHoursBeforeCancel;
// 	$SmyCancelationObj->Penalty->to = $smyNextHoursBeforeCancel;
// 	$vervotechhObjNew["$smyHoursBeforeCancel||$smyNextHoursBeforeCancel"] = $SmyCancelationObj->Penalty;
// }
// p($vervotechhObjNew);

$x = 0;
foreach ($vervotechhObj as $SmyCancelationObj) {
	$x++;
	$smyHoursBeforeCancelFrom = $SmyCancelationObj->HoursBefore;
	$smyHoursBeforeCancelTo = isset($vervotechhObj[$x]->HoursBefore) ? $vervotechhObj[$x]->HoursBefore : 0;
	
	$smyCancelAmount = $SmyCancelationObj->Penalty->Value;
	$smyCurrency = $SmyCancelationObj->Penalty->Currency;
	$smy_converted_amount = currencyConverterHotelbeds(str_replace(",", "", $smyCancelAmount), $smyCurrency);
	$number_formate_amoutnt = number_format(calculate_markup($pt_logged_customer, '37', $smy_converted_amount), 3);
	$smy_api_cancellation_from = date("Y-m-d H:i:s", strtotime("-" . $smyHoursBeforeCancelFrom . " hours", strtotime($checkIn)));
	$smy_api_cancellation_to =   date("Y-m-d H:i:s", strtotime("-" . $smyHoursBeforeCancelTo . " hours", strtotime($checkIn)));

	$smy_calculated_lead_time = lead_time_calculate($pt_logged_customer, '37', $smy_api_cancellation_to);
	$smy_cancellation_to = date("Y-m-d H:i:s", strtotime($smy_calculated_lead_time));
	
	if (count($vervotechh->cancellation_to)) {
		$last_cancelation_to_date = $vervotechh->cancellation_to[(count($vervotechh->cancellation_to) -1)];
		$vervotechh->cancellation_from[] = $last_cancelation_to_date;
		$vervotechh->cancellation_to[] = date("Y-m-d", strtotime($smy_cancellation_to));
		$vervotechh->cancellation_amount[] = $number_formate_amoutnt;
	} else {

		if($smy_api_cancellation_from > date("Y-m-d H:i:s")) {
			$refundability_status = "Refundable";
			$vervotechh->cancellation_amount[] = 0;
			$vervotechh->cancellation_from[] = date("Y-m-d");
			$vervotechh->cancellation_to[] = date("Y-m-d", strtotime($smy_api_cancellation_from));
		}
		
		$vervotechh->cancellation_from[] = date("Y-m-d", strtotime($smy_api_cancellation_from));
		$vervotechh->cancellation_to[] = date("Y-m-d", strtotime($smy_cancellation_to));
		$vervotechh->cancellation_amount[] = $number_formate_amoutnt;
	}


}
p($vervotechh);

function currencyConverterHotelbeds($smyCancelAmount, $curr)
{
	return $smyCancelAmount * 60;	
}

function lead_time_calculate($dd,$ddx,$smy_api_cancellation_to)
{
	return $smy_api_cancellation_to;
}
function calculate_markup($sss,$dd,$smy_converted_amount)
{
	return $smy_converted_amount;
}
function p($p, $exit = 1)
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    if ($exit == 1)
    {
        exit;
    }
} 
?>
