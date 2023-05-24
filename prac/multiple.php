<?php
$a=$_GET['a'];

$i=1;
while($i<=10)
{
    echo $a." X ".$i." = ".($a*$i)."<br>";
    $i++;
}
?>