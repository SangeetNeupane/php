<?php
$haddi=0;
for($j=1;$j<=5;$j++)
{  
for($i=1;$i<=5;$i++)
{
for($k=1;$k<=5;$k++)
    {   
    ++$haddi;
    echo "Mathi ko".$haddi.'<br>';
    if($haddi==32)
    {
        goto reeza;
    }
}
}
}
show:
echo "I Love You Both.<br>";
echo "Tala ko".$haddi.'<br>';
reeza:
echo "I Love You Both My dears.<br>";
?>