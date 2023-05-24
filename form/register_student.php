<html>
<head>
    <title>Document</title>
</head>
<body>
    <script>
<?php if(isset($_GET['msg'])){?>
                alert('<?php echo $_GET['msg']; ?>');
                <?php } ?></script>
    <fieldset>
        <legend>Get Student Details</legend>
        <form action="process_register_student.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <th>Roll</th>
                <td><input type="text" name="roll" id="roll"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="text" name="gender" id="gender" placeholder="M/F"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>
            </tr>
        </table>

        </form>
    
    </fieldset>
</body>
</html>