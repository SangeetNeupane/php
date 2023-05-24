<?php

$ROLL=$_POST['rollnum'];
$NAME=$_POST['fname'];
$EMAIL=$_POST['email'];
$GENDER=$_POST['gender'];


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="UPDATE Student
        SET NAME='$NAME',
        EMAIL='$EMAIL',
        GENDER='$GENDER'
    Where ROLL='$ROLL' ";

echo $sql;
$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    header('location: get_student.php?msg=success');
}
else
{
    header('location: get_student.php?msg=failure');
}
mysqli_close($con);
?>



 
 
      
