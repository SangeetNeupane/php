<?php

$filename="E:\\File\\first.txt";
$file=fopen($filename,"r");
if($file == false)
{
    echo "Error In Opening File";
    exit(-1);
}
$filesize=filesize($filename);
$filetext=fread($file,$filesize);
fclose($file);
$filename="E:\\File\\second.txt";
$file=fopen($filename,"w");
if($file == false)
{
    echo "Error In Opening File";
    exit(-1);
}
fwrite($file,$filetext);
fclose($file);
?>