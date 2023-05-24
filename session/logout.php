<?php
session_start();
session_destroy();
setcookie('Student_Id',$row['Student_Id'],time()-1*30*24*60*60);
setcookie('Phone',$row['Phone'],time()-1*30*24*60*60);
setcookie('Full_Name',$row['Full_Name'],time()-1*30*24*60*60);
header('location:login.php');
?>