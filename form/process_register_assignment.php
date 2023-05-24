<?php

//$ASSIGNMENT_ID=$_POST['assignment_id'];
$DUE_DATE=$_POST['due_date'];
$TITLE=$_POST['title'];
$QUESTIONS =$_POST['questions'];



$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Assignment
    (ASSIGNMENT_ID,DUE_DATE,TITLE,QUESTIONS)
    VALUES
    (NULL,'$DUE_DATE','$TITLE','$QUESTIONS')";

echo $sql;
$res=mysqli_query($con,$sql) or header('location:register_assignment.php?msg=Failure');



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    //echo("Record Inserted");
    header('location:get_assignment.php?msg=success');
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_close($con);
?>

