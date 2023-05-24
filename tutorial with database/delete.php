<?php
//delete.php


$NAME='Sangeet Neupane';

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="DELETE FROM Student
    Where NAME='$NAME'";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    echo("Record DELETED");
}
else
{
    echo("Record Couldnot be Delete.");
}
mysqli_close($con);
?>

