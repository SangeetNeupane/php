<?php
$a="madam";
echo $a;
$b=strrev($a);
if($a==$b)
{
    echo "<br>The given string is palindrome.";
}
else{
    echo "<br>The given string is not palindrome.";
}
?>