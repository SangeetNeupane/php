<?php
    session_start();
    if(isset($_COOKIE['Student_Id'])&& !empty($_COOKIE['Student_Id']))
    {
        $_SESSION['Student_Id']=$_COOKIE['Student_Id'];
        $_SESSION['Full_Name']=$_COOKIE['Full_Name'];
        $_SESSION['Phone']=$_COOKIE['Phone'];   
    }
    if(isset($_SESSION['Student_Id']))
    {
        echo "Welcome ";
        echo"<br><a href='logout.php'>Click Here For Logout</a>".$_SESSION['Full_Name'];
    }
    else{
        header('location:login.php');
    }
?>