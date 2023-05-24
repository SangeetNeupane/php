<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$last=500;
$i=2;

do{
    $j=2;
    if ($i>=$last)
    {
        break;
    }
     
    
    do{
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
    }while(TRUE);
    $i++;
}while(TRUE);

?>