<html >
<head>
    <title>Bill</title>
</head>
<body>
<h1>Get Base Value ,Current unit, Last Unit <a href="Q2.php?y=100&cu=154&lu=100">Click Here</a></h1>
</body>
</html>
<?php
$y=isset($_GET['y'])?$_GET['y']:100;
$lu=isset($_GET['lu'])?$_GET['lu']:100;
$cu=isset($_GET['cu'])?$_GET['cu']:154;
$x=$cu-$lu;//Point Value
$y=100;//Base value
echo "Point used= ".$x."<br>";
if($x>=0 and $x<=20)
{
    echo "You have to pay Rs.".$y;
}
elseif($x>=21 and $x<=40)
{
    $z=(5*1)+$y+(($x-20)*3);
    echo "You have to pay Rs.".$z;
}
elseif($x>=41 and $x<=50)
{
    $z=(10*1)+$y+(($x-20)*5);
    echo "You have to pay Rs.".$z;
}
else
{
    $z=(15*1)+$y+(($x-20)*10);
    echo "You have to pay Rs.".$z;
}
?>