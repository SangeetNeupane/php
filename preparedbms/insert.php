<?php
//student.php

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Student
    (ROLL,NAME,EMAIL,GENDER)
    VALUES
    (?,?,?,?)";

$ROLL=32;
$NAME='Haddi Jaiswal';
$EMAIL='haddi@gmail.com';
$GENDER='F';

$stmt=mysqli_prepare($con,$sql) or die("Some Error in SQL Statement");
mysqli_stmt_bind_param($stmt,'isss',$ROLL,$NAME,$EMAIL,$GENDER);

$res=mysqli_stmt_execute($stmt);


$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    echo("Record Inserted");
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_stmt_close($stmt);
mysqli_close($con);
?>

