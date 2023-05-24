<?php
$i = 2;
$last = 500;
echo"<ul>";
do{
    $j = 2;
    if($i > $last) 
    {
        break;
    }
    do{
        if($j > sqrt($i))
        {
            echo "<li>".$i."</li>";
            break;
        }
        if($i % $j == 0) 
        {
            break;
        }
        $j++;
    }while(TRUE);
    $i++;
}while(TRUE);
echo"</ul>";
?>
