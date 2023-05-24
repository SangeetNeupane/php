<?php


$ASSIGNMENT_ID=$_GET['assignment_id'];

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="DELETE FROM Assignment
    Where ASSIGNMENT_ID='$ASSIGNMENT_ID'";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    header('location:get_assignment.php?msg=Deleted_Successfully');
}
else
{
    header('location:get_assignment.php');
}
mysqli_close($con);
?>

