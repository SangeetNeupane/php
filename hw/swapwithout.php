<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String</title>
</head>
<body>
    <h1>Swaping Of Two Number:- <a href="swapwithout.php?a=3&b=5">Click Here</a></h1>
</body>
</html>
<?php
$a=isset($_GET['a'])?$_GET['a']:15;
$b=isset($_GET['b'])?$_GET['b']:5;
swap($a,$b);
function swap($a,$b)
{
echo "Before swapping: a = $a and b = $b<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping: a =$a and b = $b";

}

?>