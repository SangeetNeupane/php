<?php


$host='localhost';
$user='root';
$pwd='';
$db='Assignment_Homework';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");



$sql = "SELECT * FROM student ";

$res = mysqli_query($con, $sql)
    or die("Some error in the SQL statement");

$data = array();
$numRows = mysqli_num_rows($res); 
if($numRows ==0){
    echo "Sorry, there are no records for the time being";
}else{
    
    while($row = mysqli_fetch_assoc($res)){
        
        array_push($data, $row); 
    }
   
}
$sql2="SELECT *FROM ASSIGNMENT";


$res = mysqli_query($con, $sql2)
    or die("Some error in the SQL statement");

$data1 = array();
$numRows = mysqli_num_rows($res); 
if($numRows ==0){
    echo "Sorry, there are no records for the time being";
}else{
    
    while($row = mysqli_fetch_assoc($res)){
        
        array_push($data1, $row); 
    }
   
}
mysqli_close($con);

?>

<html>
<head>
    <title>Document</title>
</head>
<body><script>
<?php if(isset($_GET['msg'])){?>
                alert('<?php echo $_GET['msg']; ?>');
                <?php } ?></script>
    <fieldset>
        <legend>Submission Assignment</legend>
        <form action="process_register_submission.php" method="post">
        <table>
            
            <tr align='left'>
                <th>Roll</th>
                <td>
                        
                    <select name="roll" id="roll">
                        <?php foreach($data as $key=>$values){?>
                            <option value="<?php echo $values['ROLL']; ?>"> <?php echo $values['NAME'] . '('. $values['ROLL'] . ')' ; ?> </option>
                        <?php } ?>


                    </select>
                 </td>
            </tr>
            <tr align='left'>
                <th>Assignment Id</th>
                <td>
                <select name="a_id" id="a_id">
                        <?php foreach($data1 as $key1=>$values1){?>
                            <option value="<?php echo $values1['ASSIGNMENT_ID']; ?>"> <?php echo $values1['TITLE'] . '('. $values1['ASSIGNMENT_ID'] . ')' ; ?> </option>
                        <?php } ?>


                    </select>
                </td>
            </tr>

            <tr align='left'>
                <th>Upload File</th>
                <td><input type="text" name="upload_file" id="upload_file"></td>
            </tr>
            <tr align='left'>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>
            </tr>
        </table>

        </form>
    
    </fieldset>
</body>
</html>