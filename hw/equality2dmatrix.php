<?php
function eqmatrix($a,$b)
{
    
    if($a==$b)
    {
        echo "You have passed an equality Matrix.";
    }
    else{
        echo "You havenot passed an equality Matrix.";
    }
}
$d=array(
    array(1,0,0),
    array(2,1,4),
    array(0,1,1)
);
$e=array(
    array(1,0,0),
    array(2,1,4),
    array(0,1,1)
);
eqmatrix($d,$e);
?>