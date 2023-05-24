<?php
function myfun($num1,$num2)
{
 if($num1>$num2)
 {
    return $num1;
 }
 else 
 {
    return $num2;
 }
}
echo ("Greatest Number Is ".myfun(8,4));
?>