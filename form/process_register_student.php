<?php


$ROLL=$_POST['roll'];
$NAME=$_POST['fname'];
$EMAIL=$_POST['email'];
$GENDER=$_POST['gender'];



$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Student
    (ROLL,NAME,EMAIL,GENDER)
    VALUES
    ('$ROLL','$NAME','$EMAIL','$GENDER')";

$res=mysqli_query($con,$sql) or header('location:register_student.php?msg=Failure');



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    //echo("Record Inserted");
    header('location:get_student.php?msg=success');
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_close($con);
?>

