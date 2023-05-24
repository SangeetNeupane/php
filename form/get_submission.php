<?php


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_Homework';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");


$sql="SELECT * FROM submission";


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
                <th>Roll</th>
                <th>Assignment Id</th>
                <th>Submission Id</th>
                <th>Submission Date</th>
                <th>Upload File</th>
                <th>Delete/Edit</th>
            </tr>
            
            <?php
            foreach($data as $key=>$values)
            {
              
            ?>
            <tr>
              <td>  <?php echo $values['ROLL'];?></td>
              <td>  <?php echo $values['ASSIGNMENT_ID'];?></td>
              <td>  <?php echo $values['Submission_Id'];?></td>
             <td>   <?php echo $values['Submitted_DATE'];?></td>
             <td>   <?php echo $values['Upload_File'];?></td>
             <td> <a href="edit_submission.php?s_id=<?php echo $values['Submission_Id']; ?>">Edit</a>/<a href="delete_submission.php?roll=<?php echo $values['Submission_Id']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <h2><a href="register_submission.php"> Click Here For Submission Of Assignment</a></h2>
    </body>
</html>