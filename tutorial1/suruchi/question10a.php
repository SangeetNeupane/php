<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$arr=['Momo','Chowmein','Samosa','Chat'];
echo "By Using Print_r"."<br>";
echo"<pre>";
print_r($arr);
echo"</pre>";
echo "By Using var_dump"."<br>";
echo"<pre>";
var_dump($arr);
echo"</pre>";
echo "By Using For Loop"."<br>";
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i].'<br>';
}
echo "By Using Foreach Loop"."<br>";
foreach($arr as $arrs=>$val)
{
    echo $arrs."=>".$val.'<br>';
}
?>