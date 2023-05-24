<?php
$r=array(7,5,36,32,14,23,37,32);
function sorting_arr($in) {
    
    for($i=0; $i<count($in); $i++) {
        for($j=$i+1; $j<count($in); $j++) {
            if($in[$i] > $in[$j]) {
                $temp = $in[$j];
                $in[$j]=$in[$i];
                $in[$i]=$temp;
            }     
        }
    }
    echo "In Accending Order: ";
    foreach($in as $out)
    {
        echo $out.",";
    }
    for($i=0; $i<count($in); $i++) {
        for($j=$i+1; $j<count($in); $j++) {
            if($in[$i] < $in[$j]) {
                $temp = $in[$j];
                $in[$j]=$in[$i];
                $in[$i]=$temp;
            }     
        }
    }
    echo "<br>In decending Order: ";
    foreach($in as $out)
    {
        echo $out.",";
    }
}
sorting_arr($r);
?>
