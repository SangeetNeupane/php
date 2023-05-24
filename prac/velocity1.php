<?php
$a=$_GET['a'];
$s=$_GET['s'];
$u=$_GET['u'];
echo $a." ".$s." ".$u."<br>";
$v=sqrt(pow($u,2)+(2*$a*$s));
echo "The velocity of given by using formula 1 is  ".$v;
?>