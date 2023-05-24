<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$host='localhost';
$user='root';
$pwd='';
$db='session';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");
$sql="SELECT Student_Id,Full_Name,Phone FROM student WHERE user_name='$username' AND Password='$password'";
$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");
$row=mysqli_fetch_assoc($res);
$_SESSION['Student_Id']=$row['Student_Id'];
$_SESSION['Full_Name']=$row['Full_Name'];
$_SESSION['Phone']=$row['Phone'];
setcookie('Student_Id',$row['Student_Id'],time()+1*30*24*60*60);
setcookie('Full_Name',$row['Full_Name'],time()+1*30*24*60*60);
setcookie('Phone',$row['Phone'],time()+1*30*24*60*60);
mysqli_close($con);

header('location:secured.php');
?>