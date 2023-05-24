<html>
    <head>
        <title>odd or even</title>
    </head>
    <body>
        <h1>Check odd or even <a href="checknum.php?x=5">Click here</a></h1>
    </body>
</html>
<?php
$x=isset($_GET['x'])?$_GET['x']:5;
check($x);
function check($a)
{
    if($a%2==0)
    {
        echo $a." is even.";
    }
    else{
        echo $a." is odd.";
    }
}

?>