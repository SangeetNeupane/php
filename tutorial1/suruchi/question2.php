<html>
<head><title>
    Question
</title></head>
<body>
    <h1>Change The Value through Link <a href="question2.php?y=100&l=154&c=200">Click</a></h1>
</body>
</html>
<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$y=isset($_GET['y'])?($_GET['y']):100;
$l=isset($_GET['l'])?($_GET['l']):154;
$c=isset($_GET['c'])?($_GET['c']):200;
$x=$c-$l;//units
if($x>=0 and $x<=20)
{
    echo "You have to pay Rs:".$y;
}
elseif($x>=21 and $x<=40)
{
    $z=(5*$y)/100+$y+3*($x-20);
    echo "You have to pay Rs:".$z;
}
elseif($x>=41 and $x<=50)
{
    $z=(10*$y)/100+$y+5*($x-20);
    echo "You have to pay Rs:".$z;
}
else
{
    $z=(15*$y)/100+$y+10*($x-20);
    echo "You have to pay Rs:".$z; 
}
?>
