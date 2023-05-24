<?php
$path = "/PHP_WEB/server/basename.php";
//To Show filename with file extension
echo basename($path) ."<br/>";
//  To Show filename without file extension
echo basename($path,".php")."<br>";
//To show path info 
echo "<pre>";
print_r(pathinfo("/PHP_WEB/server/basename.php"));
echo "</pre>";
?>