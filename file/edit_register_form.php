<?php
$Std_id= isset($_GET['Std_id']) ? $_GET['Std_id'] : '';


$host='localhost';
$user='root';
$pwd='';
$db='Assignment';
$con= mysqli_connect($host,$user,$pwd,$db) or die("Could Not Connect Database Server.");


$sql = "SELECT * FROM student WHERE  Std_id= '$Std_id'";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Edit Register For Any Course</legend>
        <table>
        <?php foreach($data as $key=>$values){
             $Courses=explode(',',$values['Courses']);
             
             ?>
            <form action="process_edit_register_form.php" method="post" enctype="multipart/form-data">
            <tr align='left'>
                <th>Name</th>
                <td><input type="text" name="fname" id="fname" value="<?php echo $values['Name'];?>" ></td>
            </tr>
            <tr align='left'>
                <th>Email</th>
                <td><input type="email" name="email" id="email" value="<?php echo $values['Email'];?>"></td>
            </tr>
            <tr align='left'>
                <th>Phone</th>
                <td><input type="phone" name="phone" id="phone" value="<?php echo $values['Phone'];?>"></td>
            </tr>
            <tr align='left'>
                <th>Gender</th>
                
                <td><input type="radio" name="gender" id="genderM" value="M"<?php if(  $values['Gender']=='M'?'Checked':''){echo'checked';} ?>>Male&nbsp;&nbsp;<input type="radio" name="gender" id="genderF" value="F"<?php  if($values['Gender']=='F'?'Checked':''){echo'checked';} ?> >Female</td>
            </tr>
            <tr align='left'>
                <th>Courses</th>
                <td><input type="checkbox" name="chkcourse[]" id="check1"  value='BSC.csit' <?php foreach($Courses as $key=>$value){ if( $value=='BSC.csit'){echo'Checked';} }?> >BSC.csit &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check2"  value='BIM' <?php foreach($Courses as $key=>$value){ if( $value=='BIM'){echo'Checked';} }?>>BIM &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check3"  value='BCA' <?php foreach($Courses as $key=>$value){ if( $value=='BCA'){echo'Checked';} }?> >BCA &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check4" value='B.ED.'  <?php foreach($Courses as $key=>$value){ if( $value=='B.ED.'){echo'Checked';} }?> >B.ED. &nbsp;&nbsp;</td>
            </tr>
            <tr align='left'>
                <th>Country</th>
                <td>
                    <select name="country" id="country">
                       
                        <option value='Nepal' <?php echo($values['Country']=='Nepal' )?'selected':' '; ?>>Nepal</option>
                        <option value='India'<?php echo ($values['Country']=='India')?'selected':' ';?>>India</option>
                        <option value='Bangladesh'<?php echo ($values['Country']=='Bangladesh')?'selected':' '; ?>>Bangladesh</option>
                        <option value='China'<?php echo ($values['Country']=='China')?'selected':' ';?>>China</option>

                    </select>
                </td>
            </tr>
            <tr align='left'>
                <th>Short Bio</th>
                <td><textarea name="bio" id="bio" value=""><?php echo $values['Short_Bio'];?></textarea></td>
            </tr>

            <tr align='left'>
                <th>Pasport Size Image</th>
               
                <td><input type="file" name="image" id="image" accept="image/png,image/jpeg,image/jpg"
                value=" <?php echo $values['Pp_image'];?> "><img src=" <?php echo $values['Pp_image'];?> " alt="IMG" height="50px" width="50px"></td>
            </tr>
            
            <tr align='left'>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset">
                <input type="hidden" id="Std_id" name="Std_id" value="<?php echo $Std_id ?>"></td>
            </tr>
            </form>
            <?php  } ?>
        </table>

    </fieldset>
</body>
</html>