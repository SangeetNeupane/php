<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String</title>
</head>
<body>
    <h1>Sum Of Two Number:- <a href="2015 11.php?a=3&b=5">Click Here</a></h1>
</body>
</html>
<?php
$a=isset($_GET['a'])?$_GET['a']:15;
$b=isset($_GET['b'])?$_GET['b']:5;
echo "a=$a  ,  b=$b <br>";
function add($num1,$num2)
{
    return $num1+$num2;
}

$sum=add($a,$b);
echo "Sum: $sum";

?>