<?php
//update.php

$ROLL=7;
$EMAIL='s2059n@gmail.com';
$NAME='Music Neupane';

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="UPDATE Student
        SET NAME='$NAME',
        EMAIL='$EMAIL'
    Where ROLL='$ROLL' ";


$res=mysqli_query($con,$sql)or trigger_error('Some Error In SQL');


$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    echo("Record Updated");
}
else
{
    echo("Record Couldnot be Update.");
}
mysqli_close($con);
?>

