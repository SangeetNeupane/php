<?php
//assignment.php

$ASSIGNMENT_ID=77;
$DUE_DATE='2024-01-26';
$TITLE='Database With Php';
$QUESTIONS ="What Is Your Name ?";


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Assignment
    (ASSIGNMENT_ID,DUE_DATE,TITLE,QUESTIONS)
    VALUES
    ('$ASSIGNMENT_ID','$DUE_DATE','$TITLE','$QUESTIONS')";


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

