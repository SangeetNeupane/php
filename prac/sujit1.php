<?php
$max=0;
$smax=0;
$array=[10,12,29,34,16];
foreach($array as $val)
{
    if($val>$max)
    {
        $smax=$max;
        $max=$val;
    }
    elseif($val>$max)
    {
        $smax=$val;
    }
}
echo "The maximum value is $max";
echo "<br>";
echo "The second highest value is $smax";
?>