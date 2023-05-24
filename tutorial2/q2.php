<?php
function idmatrix($a)
{
    $b=array(
        array(1,0,0),
        array(0,1,0),
        array(0,0,1)
    );
    if($a==$b)
    {
        echo "You have passed an identity Matrix.";
    }
    else{
        echo "You havenot passed an identity Matrix.";
    }
}
$d=array(
    array(1,0,0),
    array(0,1,0),
    array(0,1,1)
);
idmatrix($d);
?>