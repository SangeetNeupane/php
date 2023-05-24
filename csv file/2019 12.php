<?php
$filename="E:\\File\\profile.csv";

$file=fopen($filename,"r");
if($file==false)
{
    echo "File doesnot opened.";
    exit(-1);
}
$data=array();
while(!feof($file)){
    array_push($data,fgetcsv($file));
}

$con=mysqli_connect('localhost','root','','item');
$sql="INSERT INTO itemtable
            (itemId,itemDesc,rate,qty)
            values('$data[0]','$data[1]','$data[2]','$data[3]') ";

$res=mysqli_query($con,$sql);
$affected_row=mysqli_affected_rows($con);
if($affected_row==0)
{
    echo"Data has not inserted.";
}
else{
    echo"Data has Inserted";
}
mysqli_close($con);
?>
