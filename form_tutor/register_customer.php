<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   
    <fieldset>
    <table>
        <legend>Get Customer</legend>
        <form action="process_register_customer.php" method="post">
            <tr>
                <th>CUSTOMER_ID</th>
                <td><input type="text" name='cid' id='cid'></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><input type="text" name='fname' id='fname'></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><input type="email" name='email' id='email'></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><input type="text" name='dob' id='dob' placeholder='yyyy-mm-dd'></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" name='phone' id='phone'></td>
            </tr>
            <tr>
                <th>Credit Limit</th>
                <td><input type="text" name='climit' id='climit'></td>
            </tr>
            <tr>
                <th colspan='2'><input type="submit" value="Submit" id='submitbtn' name='submitbtn'>&nbsp; &nbsp;
                <input type="reset"  id='submitbtn' name='submitbtn'></th>
            </tr>
        </form>
    
    </table>
</fieldset>
</body>
</html>