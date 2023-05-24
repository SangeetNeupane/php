<?php
$x1=1;
$y1=2;
define ("h",3);
define ("k",1);
define ("r",1);
$d=pow((h-$x1),2)+pow((k-$y1),2);
echo "The value of d is ".$d."<br>";
if($d<r)
{
    echo"Given Point is inside Circle.";
}
elseif($d>r)
{
    echo"Given Point is outside Circle.";
}
else{
    echo"Given Point is on the Circle.";   
}
?>