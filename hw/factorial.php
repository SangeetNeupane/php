<html>
    <head>
        <title>Factorial</title>
    </head>
    <body>
        <h1>Find factorial : <a href="factorial.php?num=5">Click</a></h1>
    </body>
</html>
<?php
$N=isset($_GET['num'])?$_GET['num']:5;
function factorial($a)
{
$fact=1;
$n=$a;
while($a>0)
{
    $fact=$fact*$a;
    $a--;
}
echo "Number=".$n."<br>";
echo "The factorial of ".$n." is ".$fact;
}
factorial($N);
?>