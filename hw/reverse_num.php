<html>
    <head>
        <title>Reverse of a number</title>
    </head>
    <body>
        <h1>Find Reverse : <a href="reverse_num.php?n=2546">Click</a></h1>
    </body>
</html>
<?php
$n=isset($_GET['n'])?$_GET['n']:2145;
function reverse($a)
{
    $rev=strrev($a);
    return $rev;
}
$r=reverse($n);
echo "The reverse of the number ".$n." is ".$r;
?>