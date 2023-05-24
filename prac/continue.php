<?php
for($j=1;$j<=5;$j++)
{
    if($j==2)
    {
        echo "<br> skiped.";
        continue;
    }
for($i=1;$i<=5;$i++)
{
    
    if($i==3)
    {
        echo "<br> Line Skiped.";
        continue;
    }
    echo "<br> $i";
}

}
?>