<?php
$ROLL=$_POST['roll'];
$ASSIGNMENT_ID=$_POST['a_id'];
$Submitted_DATE=date('y-m-d');
$Upload_File=$_POST['upload_file'];



$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Submission
    (ROLL,ASSIGNMENT_ID,Submitted_DATE,Upload_File)
    VALUES
    ('$ROLL','$ASSIGNMENT_ID','$Submitted_DATE','$Upload_File')";


$res=mysqli_query($con,$sql) or header('location:register_submission.php?msg=Failure');



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    //echo("Record Inserted");
    header('location:get_submission.php?msg=success');
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_close($con);
?>

