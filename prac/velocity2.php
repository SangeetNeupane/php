<?php
$u=$_GET['u'];
$a=$_GET['a'];
$t=$_GET['t'];
echo $a." ".$t." ".$u."<br>";
$v=$u+($a*$t);
echo "The velocity of given by using 2nd formula".$v;
?>