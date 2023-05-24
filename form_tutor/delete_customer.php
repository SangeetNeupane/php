<?php

$CUSTOMER_ID=$_GET['id'];



$host='localhost';
$user='root';
$pwd='';
$db='Tutorial';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");
$sql="DELETE FROM Customer
        where CUSTOMER_ID='$CUSTOMER_ID'";

$res=mysqli_query($con,$sql) or die('You have enter wrong Syntax');

$affected_row=mysqli_affected_rows($con);

if($affected_row==0)
{
    //echo("Your Data isnot DELETED.");
    header('location:get_customer_details.php');
}
else{
    //echo("Your Data is DELETED.");
    header('location:get_customer_details.php');
    }
   mysqli_close($con);


?>
