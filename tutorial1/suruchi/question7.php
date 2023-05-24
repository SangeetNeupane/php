<html>
<head><title>
    Question
</title></head>
<body>
    <h1>Change The Value through Link <a href="question7.php?n=5">Click</a></h1>
</body>
</html>

<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$n=isset($_GET['n'])?($_GET['n']):5;
$fact=1;
$a=$n;
while($n>0)
{
$fact=$fact*$n;
$n--;
}
echo"The Factorial of ".$a." is ".$fact;

?>