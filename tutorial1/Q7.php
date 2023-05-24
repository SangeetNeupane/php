<?php
$num=5;
$num1=$num;
$fact=1;
while($num>0){
    $fact=$fact*$num;
    $num--;
}
echo "The factorial of ".$num1." is ".$fact;

?>