<?php

$CUSTOMER_ID=$_POST['cid'];
$FULL_NAME=$_POST['fname'];
$EMAIL=$_POST['email'];
$DOB=$_POST['dob'];
$PHONE=$_POST['phone'];
$CREDIT_LIMIT=$_POST['climit'];

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
    //echo("Your Data isnot Inserted.");
    header('location:get_customer_details.php');
}
else{
   // echo("Your Data is Inserted.");
   header('location:get_customer_details.php');
    }
   mysqli_close($con);


?>
