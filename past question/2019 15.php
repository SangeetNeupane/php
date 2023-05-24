<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Fill The Form</legend>
            <form action="process_2019_15.php" method="post">
                Name:<input type="text" name="fname">
             <br>Age:<input type="text" name="age">
             <br>Hobbies:<input type="checkbox" name=hobbies[] value="Singing">Singing<input type="checkbox" name=hobbies[] value="Dancing">Dancing<input type="checkbox" name=hobbies[] value="Playing">Playing
            <br>
            Comment: <textarea name='com' ></textarea>
            <input type="submit" value="submit">
            </form>
        </fieldset>
    </body>
</html>