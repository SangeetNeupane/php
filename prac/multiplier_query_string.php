
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String</title>
</head>
<body>
    <h1>Multiple Of Number:- <a href="multiplier_query_string.php?a=3">Click Here</a></h1>
</body>
</html>
<?php
$a=isset($_GET['a'])?$_GET['a']:25;
$i=1;
echo "Multiple of ".$a." less than 100:"."<br>";
while($i<100)
{
    $d=$a*$i;
    $i++;
    if($d<100)
        {
        echo $d.",";
        }
}
?>