<?php
for($j=1;$j<=100;$j++)
{
for($i=1;$i<=100;$i++)
{
   
    if($i==90)
    {
        echo "<br> Line Terminated.";
        break;
    }
    echo "<br> $i";
}
if($j==5)
    {
        echo "<br> Line Terminated 1.";
        break;
    }
}
?>