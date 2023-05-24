<?php

$CUSTOMER_ID='106';
$FULL_NAME='ABC Yadav';
$EMAIL='abc@gmail.com';
$DOB='2059-11-02';
$PHONE=9814200050;
$CREDIT_LIMIT=48000;

$host='localhost';
$user='root';
$pwd='';
$db='Tutorial';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");
$sql="INSERT INTO  Customer
        (CUSTOMER_ID,FULL_NAME,EMAIL,DOB,PHONE,CREDIT_LIMIT)
        VALUES
        ('$CUSTOMER_ID','$FULL_NAME','$EMAIL','$DOB','$PHONE','$CREDIT_LIMIT') ";

$res=mysqli_query($con,$sql) or die('You have enter wrong Syntax');

$affected_row=mysqli_affected_rows($con);

if($affected_row==0)
{
    echo("Your Data isnot Inserted.");
}
else{
    echo("Your Data is Inserted.");
    }
   mysqli_close($con);


?>
