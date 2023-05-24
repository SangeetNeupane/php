<?php
/*
The problem with using goto statements is that it is easy to develop program logic that is very difficult to understand, even for the original author of the code. It is easy to get caught in an infinite loop if the goto point is above the goto call.


The goto statement can be used to alter the flow of control in a program. Although the goto statement can be used to create loops with finite repetition times, use of other loop structures . The use of the goto statement requires a label to be defined in the program.
*/
$Count=0;
for($j=1;$j<=5;$j++)
{  
for($i=1;$i<=5;$i++)
{
for($k=1;$k<=5;$k++)
    {   
    ++$Count;
   
    if($Count==32)
    {
        goto show;
    }
    echo "Up Counter = ".$Count.'<br>';
}
}
}
show:
echo "I Love You Prgramming.<br>";
echo " Down Counter = ".$Count.'<br>';
?>