<?php


$Std_id= isset($_GET['Std_id']) ? $_GET['Std_id'] : '';

$host='localhost';
$user='root';
$pwd='';
$db='Assignment';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="DELETE FROM Student
    Where Std_id='$Std_id'";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    header('location:get_register.php?msg=Deleted_Successfully');
}
else
{
    header('location:get_register.php');
}
mysqli_close($con);
?>

