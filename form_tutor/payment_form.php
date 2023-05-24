<?php


$host='localhost';
$user='root';
$pwd='';
$db='Tutorial';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");



$sql = "SELECT * FROM Customer ";

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

mysqli_close($con);

?>

<html>
<head>
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Get Payment</legend>
        <form action="process_payment_form.php" method="post">
        <table>
            
            
            <tr>
                <th>Amount</th>
                <td><input type="text" name="amount" id="amount" ></td>
            </tr>
            <tr>
                <th>Customer Name</th>
                <td>
                        
                    <select name="c_id" id="c_id">
                        <?php foreach($data as $key=>$values){?>
                            <option ><?php echo $values['FULL_NAME']. '('. $values['CUSTOMER_ID'] . ')' ; ?> </option>
                        <?php } ?>


                    </select>
                 </td>
            </tr>
            <tr>
                <th>Paid Date</th>
                <td><input type="text" name="pdate" id="pdate" placeholder='yyyy-mm-dd' ></td>
            </tr>
            <tr>
                <th>Cheque Number</th>
                <td><input type="text" name="cnum" id="cnum"  ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>

            </tr>
        </table>

        </form>
    
    </fieldset>
</body>
</html>