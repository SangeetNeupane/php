<?php
    $array =array("Sujit"=>"1","Sandesh"=>"3","Ravi"=>"6","Sangeet"=>"2","Reeza"=>"5","Suruchi"=>"4");
    function insertion_sort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $j = $i;
        while ($j > 0 && $arr[$j] < $arr[$j-1]) {
            $tmp = $arr[$j-1];
            $arr[$j-1] = $arr[$j];
            $arr[$j] = $tmp;
            $j--;
        }
    }

    return $arr;
}
$values = array_values($array);

$sorted = array();
foreach (insertion_sort($values) as $value) {
    $sorted[$value] = $array[$value];
}

print_r($sorted);
?>