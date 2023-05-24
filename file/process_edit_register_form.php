<?php

$Std_id= isset($_POST['Std_id']) ? $_POST['Std_id'] : '';
$Name=$_POST['fname'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Gender=$_POST['gender'];
$Course=implode(',',$_POST['chkcourse']);
$Country=$_POST['country'];
$Short_Bio=$_POST['bio'];
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

$sql="UPDATE Student
        SET
       Name='$Name',
        Email='$Email',
        Phone='$Phone',
        Gender='$Gender',
        Courses='$Course',
        Country='$Country',
        Short_Bio='$Short_Bio',
        Pp_image='$destination',
        Register_Date=NULL

    Where Std_id='$Std_id' ";

echo $sql;
$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");



$affected_rows=mysqli_affected_rows($con);


if($affected_rows>0)
{
   header('location: get_register.php?msg=success');
}
else
{
    //header('location: get_register.php?msg=failure');
}
mysqli_close($con);
?>