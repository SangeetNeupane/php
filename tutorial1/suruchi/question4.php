<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$last=500;
$i=2;
for($i=2;$i<=$last;$i++)
{
    
     
    for($j=2;$j<=$i;$j++)
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
        
    }
    
}

?>