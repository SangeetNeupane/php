<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$arr=['Asia'=>['Nepal'=>'Kathmandu','India'=>'New Delhi','Sirlanka'=>'Colombo']];
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
    echo $arrs.'<br>';
    foreach($val as $key=>$value)
    {
        echo $key."=>".$value.'<br>';
    }
}
?>