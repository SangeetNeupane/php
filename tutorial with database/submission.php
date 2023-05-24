<?php
//submission.php

$Submission_Id=777;
$Submitted_DATE='2024-01-27';
$ROLL=7;
$ASSIGNMENT_ID=77;
$Upload_File='homework.pdf';


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Submission
    (Submission_Id,Submitted_DATE,ROLL,ASSIGNMENT_ID,Upload_File)
    VALUES
    ('$Submission_Id','$Submitted_DATE','$ROLL','$ASSIGNMENT_ID','$Upload_File')";


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

