<?php
//student.php

$ROLL=7;
$NAME='Sangeet Neupane';
$EMAIL='s2058n@gmail.com';
$GENDER='M';



$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Student
    (ROLL,NAME,EMAIL,GENDER)
    VALUES
    ('$ROLL','$NAME','$EMAIL','$GENDER')";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    echo("Record Inserted");
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_close($con);
?>

