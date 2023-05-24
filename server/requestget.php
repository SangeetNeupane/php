<!DOCTYPE html>
<html>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// collect value of input field
$name =isset( $_GET['fname'])?$_GET['fname']:" ";
if (empty($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
?>
</body>
</html>