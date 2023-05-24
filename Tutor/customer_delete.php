<?php

$CUSTOMER_ID='105';



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
    echo("Your Data isnot DELETED.");
}
else{
    echo("Your Data is DELETED.");
    }
   mysqli_close($con);


?>
