<html >
<head>
    <title>Query String</title>
</head>
<body>
<h1>Get value of R and r <a href="Q3.php?R=8&r=5">Click Here</a></h1>
</body>
</html>
<?php
$r=isset($_GET['r'])?$_GET['r']:5;
$R=isset($_GET['R'])?$_GET['R']:10;
define('pie',3.14);
$a=pie*((pow($R,2))-(pow($r,2)));
$cost=$a*200;
echo "Cost of Flooring with tiles is ".$cost;
?>