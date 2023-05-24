
<html>
<head><title>
    Question
</title></head>
<body>
    <h1>Change The Value through Link <a href="question3.php?r=3&R=4">Click</a></h1>
</body>
</html>

<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$r=isset($_GET['r'])?($_GET['r']):4;
$R=isset($_GET['R'])?($_GET['R']):7;
define('pie',3.14);
echo"r=".$r. "and". "R=".$R."<br>";
$A=pie*(pow($R,2)-pow($r,2));
echo "A=".$A."<br>";
echo "Total cost of tiles of rs 200 per sq :"."<br>";
echo (200*$A);
?>