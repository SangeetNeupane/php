<html>
<head>
    <title>Document</title>
</head>
<body>
<?php if(isset($_GET['msg'])){?>
                alert('<?php echo $_GET['msg']; ?>');
                <?php } ?></script>
    <fieldset>
        <legend>Get Student Details</legend>
        <form action="process_register_assignment.php" method="post">
        <table>
            
           
            <tr>
                <th>Due Date</th>
                <td><input type="text" name="due_date" id="due_date" placeholder="yyyy-mm-dd"></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="title" name="title" id="title"></td>
            </tr>
            <tr>
                <th>Questions</th>
                <td><input type="text" name="questions" id="question" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" name="btnsubmit" id="btnsubmit">&nbsp; &nbsp;<input type="reset" value="Reset" name="btnreset" id="btnreset"></td>
            </tr>
        </table>

        </form>
    
    </fieldset>
</body>
</html>