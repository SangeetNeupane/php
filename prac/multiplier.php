<?php
 $a=3;
$i=1;
echo "Multiple of 3 less than 100:"."<br>";
while($i<100)
{
    $d=$a*$i;
    $i++;
    if($d<100)
        {
        echo $d.",";
        }
}
?>