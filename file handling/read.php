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
echo "File text :".$filetext."<br>";
echo "File name :".$filename."<br>";
echo "File size :".$filesize."<br>";
fclose($file);
?>