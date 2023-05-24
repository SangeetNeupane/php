<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String Permutation</title>
</head>
<body>
    <h1>Permutation :- <a href="permutation.php?n=7&r=3">Click Here</a></h1>
</body>
</html>

<?php
$n=isset($_GET['n'])?$_GET['n']:7;
$r=isset($_GET['r'])?$_GET['r']:3;
function permu($n,$r)
{
 $npr=fact($n)/fact($n-$r);
 return $npr;
}
function fact($num)
{
    if($num==0 || $num==1)
    {
       return 1;
    }
    else 
    {
       return fact($num-1)*$num;
    }
}
echo permu($n,$r);
?>