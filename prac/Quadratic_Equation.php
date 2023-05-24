<?php
$a=1;
$b=-4;
$c=4;
if($a==0)
{
    echo "Not A Quadratic  Equation.";
}
else{
    $d=pow($b,2)-(4*$a*$c);
    if($d>=0)
    {
        if($d==0)
        {
            $root=-($b/(2*$a));
            echo $root;
        }
        else{
            $root1=-($b+(pow($b,2)-(4*$a*$c))/(2*$a));
            echo $root1 ."<br>";
            $root2=-($b-(pow($b,2)-(4*$a*$c))/(2*$a));
            echo $root2;
        }
    }
    else{
        echo "Imaginary Roots";
    }
}
?>