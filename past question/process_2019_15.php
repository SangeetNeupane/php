<?php
$name=$_POST['fname'];
$age=$_POST['age'];
$hobbies=isset($_POST['hobbies']);
$comment=$_POST['com'];
$error=false;

if(empty($name))
{
    echo "Name Should Not Be Empty";
    $error=true;
}
elseif(!preg_match("/^([a-zA-Z' ]+)$/",$name))
{
    echo "<br>Name Should  Be letter ";
    $error=true;
}
elseif(strlen($name)>=10 || strlen($name)<=2)
{
    echo"<br>length should be 2 to 10 character";
    $error=true;
}
if(empty($age))
{
    echo "<br>Age Should Not Be Empty";
    $error=true;
}
elseif(!preg_match("/^([0-9]+)$/",$age))
{
    echo "<br>Age Should  Be number ";
    $error=true;
}
elseif($age>55 || $age<16)
{
    echo"<br>Age should be between 16 to 55 ";
    $error=true;
}
if(empty($hobbies))
{
    echo "<br>Hobbies Should Not Be Empty";
    $error=true;
}
if(empty($comment))
{
    echo "<br>Comment Should Not Be Empty";
    $error=true;
}
if(!$error)
{
    echo "<br>Form Submited.";
}
?>