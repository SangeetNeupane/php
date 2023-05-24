<?php


$ROLL=$_GET['roll'];

$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="DELETE FROM Student
    Where ROLL='$ROLL'";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    header('location:get_student.php?msg=Deleted_Successfully');
}
else
{
    header('location:get_student.php?');
}
mysqli_close($con);
?>

