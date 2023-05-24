<?php

$filename="E:\\File\\profile.csv";
$s=array('Sangeet Neupane','Birgunj-9','21','Male');
$file=fopen($filename,"w");
if($file==false)
{
    echo "File doesnot opened.";
    exit(-1);
}
foreach($s as $r)
{
    fputcsv($file,explode(",",$r));
    
}
fclose($file);
echo"Csv File written Successfully.";
?>