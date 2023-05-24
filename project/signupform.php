<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Sign Up Form</legend>
        <table>
            <form action="process_signupform.php" method="post">
            <tr>
                <th>UserName</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Log In" name="btnlogin" id="btnlogin">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>

            </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>