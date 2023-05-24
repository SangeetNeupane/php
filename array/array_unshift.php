<?php
$a=array(5,7,32,34,37);
$b=array(9,6,4);
array_unshift($a,$b);
echo "<pre>";
print_r($a);
echo"</pre>";


$d=array("a"=>"red","b"=>"green");
array_unshift($d,"blue");
echo "<pre>";
print_r($d);
echo"</pre>";
?>