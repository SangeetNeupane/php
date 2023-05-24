<?php

$host='localhost';
$user='root';
$pwd='';
$db='Tutorial';
$con= mysqli_connect($host,$user,$pwd,$db) ;
$sql="SELECT * FROM Customer ";

$res=mysqli_query($con,$sql) ;

$num_row=mysqli_num_rows($res);

if($num_row==0)
{
    echo("Your table is Empty");
}
else{
    $data=array();
    while($row=mysqli_fetch_assoc($res))
    {
        array_push($data,$row);
    }

    
      
    }
   mysqli_close($con);


?>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border=2>
    <tr>
        <th>CUSTOMER_ID</th>
        <th>FULL_NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DOB</th>
        <th>CREDIT_LIMIT</th>

    </tr>
   
        <?php
       foreach($data as $key=>$values)
       {
        ?>
         <tr>
        <td><?php echo $values['CUSTOMER_ID'];?></td>
        <td><?php echo $values['FULL_NAME'];?></td>
        <td><?php echo $values['EMAIL'];?></td>
        <td><?php echo $values['PHONE'];?></td>
        <td><?php echo $values['DOB'];?></td>
        <td><?php echo $values['CREDIT_LIMIT'];?></td>
        
    </tr>
    <?php
       }
       ?>
    </table>
</body>
</html>