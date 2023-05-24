<?php

$a=array(1,2,3,4,5);
$b=array(1,2,3,4,5);
function array_add($a,$b)
{
    $sum=0;
    for($i=0;$i<5;$i++)
    {
        $sum=$a[$i]+$b[$i]+$sum;
    }
    return $sum;
}
echo "Sum of two array : ".array_add($a,$b);
?>