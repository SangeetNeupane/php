<?php
$u=$_GET['u'];
$t=$_GET['t'];
$a=$_GET['a'];
$s=($u*$t+(1/2*$a*pow($t,2)));
echo"the distance of given value ".$s;
?>