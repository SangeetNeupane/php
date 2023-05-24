<?php
//student.php

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="UPDATE Student
        SET
    NAME=?,EMAIL=?
    where ROLL=?";


$NAME='Suruchi Jaiswal';
$EMAIL='suruchi@gmail.com';
$ROLL=32;

$stmt=mysqli_prepare($con,$sql) or die("Some Error in SQL Statement");
mysqli_stmt_bind_param($stmt,'ssi',$NAME,$EMAIL,$ROLL);

$res=mysqli_stmt_execute($stmt);


$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    echo("Record Updated");
}
else
{
    echo("Record Couldnot be Updated");
}
mysqli_stmt_close($stmt);
mysqli_close($con);
?>

