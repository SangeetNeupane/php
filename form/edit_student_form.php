<?php
$ROLL = isset($_GET['roll']) ? $_GET['roll'] : '';


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_HOMEWORK';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");


$sql = "SELECT * FROM student WHERE ROLL = '$ROLL' ";

$res = mysqli_query($con, $sql) or die("Some error in the SQL statement");

$data = array();
$numRows = mysqli_num_rows($res); 
if($numRows ==0){
    echo "Sorry, there are no records for the time being";
}else{
    
    while($row = mysqli_fetch_assoc($res)){
        
        array_push($data, $row); 
    }
   
}

mysqli_close($con);

?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Edit Student Details</legend>
        <?php foreach($data as $values){?>
        <form action="edit_student.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="fname" id="fname" value="<?php echo $values['NAME'];?>"></td>
            </tr>
            
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id="email" value="<?php echo $values['EMAIL'];?>"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="text" name="gender" id="gender" placeholder="M/F" value="<?php echo $values['GENDER'];?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="UPDATE" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset">
                <input type="hidden" id="rollnum" name="rollnum" value="<?php echo $ROLL; ?>">
                </td>
            </tr>
        </table>

        </form>
    <?php  } ?>
    </fieldset>
</body>
</html>