<?php
function prime($num)
{
    echo "Prime Number less than ".$num;
    echo"<br>";
    for($i=2;$i<=$num;$i++)
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
}
prime(100);
?>