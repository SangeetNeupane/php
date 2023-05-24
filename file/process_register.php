<?php
// echo "<pre>";
// print_r($_POST);
// echo"</pre>";

// $choices =implode(',',$_POST['chkcourse']);


// echo "<pre>";
// print_r($_FILES);
// echo"</pre>";
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=implode(',',$_POST['chkcourse']);
$country=$_POST['country'];
$bio=$_POST['bio'];
$dir='';//current directory
$file_name=date('y-m-d-h-m-s').$_FILES['image']['name'];
$destination=$file_name;
if(move_uploaded_file($_FILES['image']['tmp_name'],$destination))
{
   // echo "File Uploaded.";
}
$host='localhost';
$user='root';
$pwd='';
$db='Assignment';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

$sql="INSERT INTO Student
   (Std_id,Name,Email,Phone,Gender,Courses,Country,Short_Bio,Pp_image,Register_Date)
    VALUES
    (NULL,'$fname','$email','$phone','$gender','$course','$country','$bio','$destination',NULL)";

$res=mysqli_query($con,$sql) or header('location:register_student.php?msg=Failure');



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
    //echo("Record Inserted");
    header('location:get_register.php?msg=success');
}
else
{
    echo("Record Couldnot be Insert");
}
mysqli_close($con);
?>