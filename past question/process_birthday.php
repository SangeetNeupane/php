<?php
$date=$_POST['dob'];
$date1=date('Y-m-d');
echo $date."<br>".$date1."<br>";
datediff($date,$date1);
function datediff($date,$date1)
{
    $d1=date_create($date);
    $d2=date_create($date1);
    $diff=date_diff($d2,$d1);
    $days= $diff->format('%a');
    $year=intval($days/365);
    $days=intval($days%365);
    $month=intval($days/30);
    $days=intval($days%30);
    echo $year." Years ".$month." month ".$days." days";
}
?>