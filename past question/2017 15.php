<?php
$date1 = '2023-01-23';
$date2 = '2020-08-27';
function diff_date($date1, $date2){
$d1 = date_create($date1);
$d2 = date_create($date2);
$diff = date_diff($d1 , $d2);


$days = $diff->format("%a");
$years = intval($days / 365);
$days = $days % 365;
$months = intval($days / 30);
$days= $days % 30;
echo 'Difference between two dates is: '.$years.' years '.$months.' months '.$days.' days';
}
diff_date($date1, $date2);
?>