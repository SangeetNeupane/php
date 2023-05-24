<?php
//tbl_student_querystring.php

// a)Connect The Database

$host='localhost';
$user='root';
$pwd='';
$db='Assignment';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");

/*
Connection Check To the data base server

echo"<pre>";
print_r($con);
echo"</pre>";
*/

// b)prepare the SQL :Select Satement
$id=isset($_GET['id'])?$_GET['id']:117;
$sql="SELECT * FROM tbl_student where ROLL=$id";

// c)Execute the statement provide us the result set

$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");

//checks the number of rows

$num_row =mysqli_num_rows($res);


if($num_row==0)
{
    echo("No record Available");
}
else
{
    // d)prepare the data

    $data=array();
    while($row=mysqli_fetch_assoc($res))
    {
        array_push($data,$row);
    }

    //To Confirm the command
    
    /*
    echo"<pre>";
    print_r($data);
    echo"</pre>";
    */

    // f)To close the database
    mysqli_close($con);
}
?>

<html>
    <head>
        <title>TABLE STUDENT Using Query String</title>
    </head>
    <body>
    <h1>Pass Roll Number To Find out The details:- <a href="tbl_student_querystring.php?id=101">Click Here</a></h1>   
        <table border=2>
            <tr>
                <th>Roll NO</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>
            
            <?php
            foreach($data as $key=>$values)
            {
              //e)Data Display in Tabular form
            ?>
            <tr>
              <td>  <?php echo $values['ROLL'];?></td>
              <td>  <?php echo $values['NAME'];?></td>
              <td>  <?php echo $values['GENDER'];?></td>
             <td>   <?php echo $values['AGE'];?></td>
            </tr>
            <?php
            }
            ?>

        </table>
    </body>
</html>