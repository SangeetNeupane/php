<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>trim Function</h1>
</body>
</html>
<?php
$a="     Good morning      ";
echo $a;
$b=trim($a);
$c="Good morning";
$d=trim($c,"Good");
echo"<br/>After trim of given string is <br/>".$b;
echo"<br/>After trim of given string is <br/>".$d;
?>