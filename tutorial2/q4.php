<?php
$r="SANGEET";
function len($s)
{
    echo $s;
    $slen=0;
    for($i = 0;$s[$i]!=null;++$i)
    {
        ++$slen;
    }
    return $slen;
    
}
echo "Length of ".$r." is ".len($r);
?>