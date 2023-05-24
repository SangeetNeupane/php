<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$arr=['Nepal'=>'Kathmandu','China'=>'Beijing','Japan'=>'Tokiyo'];
echo "By Using Print_r"."<br>";
echo"<pre>";
print_r($arr);
echo"</pre>";
echo "By Using var_dump"."<br>";
echo"<pre>";
var_dump($arr);
echo"</pre>";
echo "We cannot print by Using For Loop"."<br>";

echo '<br>'."By Using Foreach Loop"."<br>";
foreach($arr as $arrs=>$val)
{
    echo $arrs."=>".$val.'<br>';
}
?>