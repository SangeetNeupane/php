<?php
$r="SANGEET";
function rev($s)
{
    
    $slen=0;
    for($i = 0;$s[$i]!=null;++$i)
    {
        ++$slen;
    }
    $out=array();
    for($i=$slen-1;$i>=0;$i--)
    {
       array_push($out,$s[$i]);
    }
    return $out;
}
echo "Reversed of ".$r." : ";
$in=rev($r);
for($i=0;$i<count($in);++$i)
{
    echo $in[$i];
}
?>