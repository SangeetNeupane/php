<?php
$a=array(5,7,32,34,37);
$b=array(9,6,4);
$c=array_merge($a,$b);
echo "<pre>";
print_r($c);
echo"</pre>";


$d=array("a"=>"red","b"=>"green");
$e=array("c"=>"Red","d"=>"green");
$f=array_merge($d,$e);
echo "<pre>";
print_r($f);
echo"</pre>";
?>