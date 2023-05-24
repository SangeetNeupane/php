<?php
$re=array(5,7,32,34);//index
unset($re[2]);
echo"<pre>";
print_r($re);
echo"</pre>";
echo count($re);
?>
