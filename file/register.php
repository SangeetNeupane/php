<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Register For Any Course</legend>
        <table>
            <form action="process_register.php" method="post" enctype="multipart/form-data">
            <tr align='left'>
                <th>Name</th>
                <td><input type="text" name="fname" id="fname" ></td>
            </tr>
            <tr align='left'>
                <th>Email</th>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr align='left'>
                <th>Phone</th>
                <td><input type="phone" name="phone" id="phone"></td>
            </tr>
            <tr align='left'>
                <th>Gender</th>
                <td><input type="radio" name="gender" id="genderM" value='M'>Male&nbsp;&nbsp;<input type="radio" name="gender" id="genderF" value='F' >Female</td>
            </tr>
            <tr align='left'>
                <th>Courses</th>
                <td><input type="checkbox" name="chkcourse[]" id="check1"  value='BSC.csit'>BSC.csit &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check2"  value='BIM'>BIM &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check3"  value='BCA'>BCA &nbsp;&nbsp;<input type="checkbox" name="chkcourse[]" id="check4" value='B.ED.' >B.ED. &nbsp;&nbsp;</td>
            </tr>
            <tr align='left'>
                <th>Country</th>
                <td>
                    <select name="country" id="country">
                        <option value="">Select Country</option>
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="China">China</option>

                    </select>
                </td>
            </tr>
            <tr align='left'>
                <th>Short Bio</th>
                <td><textarea name="bio" id="bio" ></textarea></td>
            </tr>

            <tr align='left'>
                <th>Pasport Size Image</th>
                <td><input type="file" name="image" id="image" accept="image/png,image/jpeg,image/jpg"></td>
            </tr>
            
            <tr align='left'>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>
            </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>