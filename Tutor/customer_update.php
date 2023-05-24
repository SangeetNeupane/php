<?php

$CUSTOMER_ID='106';
$FULL_NAME='KBC Yadav';
$EMAIL='kbc@gmail.com';
$DOB='2060-11-02';


$host='localhost';
$user='root';
$pwd='';
$db='Tutorial';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");
$sql="UPDATE Customer
        SET
         FULL_NAME='$FULL_NAME',
         EMAIL='$EMAIL',
         DOB='$DOB',
         PHONE='9825244894',
         CREDIT_LIMIT='43000'
         where CUSTOMER_ID='$CUSTOMER_ID'";

$res=mysqli_query($con,$sql) or die('You have enter wrong Syntax');

$affected_row=mysqli_affected_rows($con);

if($affected_row==0)
{
    echo("Your Data isnot Updated.");
}
else{
    echo("Your Data is updated.");
    }
   mysqli_close($con);


?>
