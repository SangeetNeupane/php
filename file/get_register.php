<?php


$host='localhost';
$user='root';
$pwd='';
$db='Assignment';
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
        <title> STUDENT </title>
    </head>
    <body>
    <script>
            <?php if(isset($_GET['msg'])){?>
                alert('<?php echo $_GET['msg']; ?>');
                <?php } ?>
        </script>
        <table border=2>
            <tr>
                <th>Std_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Courses</th>
                <th>Country</th>
                <th>Short_Bio</th>
                <th>Pp_image </th>
                <th> Register_Date</th>
                <th>Delete/Edit</th>
            </tr>
            
            <?php
            foreach($data as $key=>$values)
            {
              
            ?>
            <tr>
              <td>  <?php echo $values['Std_id'];?></td>
              <td>  <?php echo $values['Name'];?></td>
              <td>  <?php echo $values['Email'];?></td>
             <td>   <?php echo $values['Phone'];?></td>
             <td>  <?php echo $values['Gender'];?></td>
             <td>  <?php echo $values['Courses'];?></td>
             <td>  <?php echo $values['Country'];?></td>
             <td>  <?php echo $values['Short_Bio'];?></td>
             <td> <img src=" <?php echo $values['Pp_image'];?> " alt="IMG" height="50px" width="50px"></td>
             <td>  <?php echo $values['Register_Date'];?></td>

             <td> <a href="edit_register_form.php?Std_id=<?php echo $values['Std_id']; ?>">Edit</a>/<a href="delete_register.php?Std_id=<?php echo $values['Std_id']; ?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        
    </body>
</html>