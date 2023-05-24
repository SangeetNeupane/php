<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Str comparision Function</h1>
</body>
</html>
<?php
$a="i love bpc ";
$b="i love brj";
echo $a."<br/>";
echo $b;
$c=strcmp($a,$b);
$d=strcmp($a,$a);
echo "<br/>Comparision between string a and string b : ".$c;
echo "<br/>Comparision between string a and string a : ".$d;
?>