<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String</title>
</head>
<body>
    <h1>Area of Rectangle:- <a href="arearec.php?l=8&b=5">Click Here</a></h1>
</body>
</html>
<?php
$l=isset($_GET['l'])?$_GET['l']:15;
$b=isset($_GET['b'])?$_GET['b']:5;
area($l,$b);
function area($l,$b)
{
echo "length = $l and breadth = $b<br>";

$ar=$l*$b;

echo "Area of rectangle:$ar";

}

?>