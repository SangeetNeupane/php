<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$last=500;
$i=2;
while(TRUE)
{
    $j=2;
    if ($i>=$last)
    {
        break;
    }
     
    while(TRUE)
    {
        if($j>sqrt($i))
        {
            echo $i."<br>";
            break;
        }
        if ($i%$j==0)
        {
            break;
        }
        $j++;
    }
    $i++;
}

?>