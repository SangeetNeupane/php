<?php
define('G',6.674E-11);
$m1=5;
$m2=6;
$d=4;
$F=G*(($m1*$m2)/pow($d,2));
echo "m1=".$m1." m2=".$m2." G=".G." d=".$d."<br>";
echo "output=".$F;
?>