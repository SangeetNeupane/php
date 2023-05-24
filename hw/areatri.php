<html lang="en">
<head>
    <title>Query String</title>
</head>
<body>
    <h1>Area of Triangle:- <a href="areatri.php?b=5&h=6">Click Here</a></h1>
</body>
</html>
<?php
$h=isset($_GET['h'])?$_GET['h']:4;
$b=isset($_GET['b'])?$_GET['b']:6;

function area($h,$b)
{
echo "Height = $h <br> Breadth = $b<br>";

$a=(1/2)*($b*$h);

echo "Area of triangle is ".$a;

}
area($h,$b);
?>