<?php


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_Homework';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");


$sql="SELECT * FROM student";


$res=mysqli_query($con,$sql) or die("Some Error in SQL Statement");


$num_row =mysqli_num_rows($res);


if($num_row==0)
{
    echo("No record Available");
}
else
{
    

    $data=array();
    while($row=mysqli_fetch_assoc($res))
    {
        array_push($data,$row);
    }

   
    mysqli_close($con);
}
?>

<html>
    <head>
        <title>TABLE STUDENT </title>
    </head>
    <body>
    <script>
            <?php if(isset($_GET['msg'])){?>
                alert('<?php echo $_GET['msg']; ?>');
                <?php } ?>
        </script>
        <table border=2>
            <tr>
                <th>Roll NO</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Delete/Edit</th>
            </tr>
            
            <?php
            foreach($data as $key=>$values)
            {
              
            ?>
            <tr>
              <td>  <?php echo $values['ROLL'];?></td>
              <td>  <?php echo $values['NAME'];?></td>
              <td>  <?php echo $values['GENDER'];?></td>
             <td>   <?php echo $values['EMAIL'];?></td>
             <td> <a href="edit_student_form.php?roll=<?php echo $values['ROLL']; ?>">Edit</a>/<a href="delete_student.php?roll=<?php echo $values['ROLL']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <h2><a href="register_assignment.php"> Click Here For Registration Of Assignment</a></h2>
    </body>
</html>