<?php
$data='I am Sangeet Neupane';
$filename="E:\\File\\first.txt";
$file=fopen($filename,"w");
if($file == false)
{
    echo "Error In Opening File";
    exit(-1);
}
fwrite($file,$data);
fclose($file);
?>