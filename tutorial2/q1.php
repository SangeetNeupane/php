<?php

function print_name($Name,$Num)
{
   $i=1;
    while($i<=$Num)
    {
        echo $i.") ".$Name."<br>";
        $i++;
    }
}
 
print_name("Sangeet",10);
?>
