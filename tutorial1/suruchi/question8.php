<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/

/*
 it is easy to develop program logic that is very difficult to understand, even for the original author of the code. It is easy to get caught in an infinite loop.

The goto statement can be used to alter the flow of control in a program. Although the goto statement can be used to create loops with finite repetition times, use of other loop structures . 
*/
$suruchi=0;
for($i=1;$i<=5;$i++)
{  
for($j=1;$j<=5;$j++)
{
for($k=1;$k<=5;$k++)
    {   
    ++$suruchi;
   
    if($suruchi==10)
    {
        goto end;
    }
    echo "Up = ".$suruchi.'<br>';
}
}
}
end:
echo " Down= ".$suruchi.'<br>';
?>