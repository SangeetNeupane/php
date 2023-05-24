<?php
$a='Sangeet Neupane';
fstring($a);
function fstring($a)
{
    $slen=strlen($a);
    echo $a."<br>"."First Character : ".$a[0]."<br>"."Last Character : ".$a[$slen-1];
}

?>