<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String Prime</title>
</head>
<body>
    <h1>Check Armstrong Number:- <a href="armstrong.php?num=153">Click Here</a></h1>
</body>
</html>
<?php
$num=isset($_GET['num'])?$_GET['num']:153;
function armstrong_num($n) {
    $i = $n;
    $sum = 0;
    $length = strlen($n);
    while ($n != 0) {
      $rem = $n % 10;
      $sum = $sum + pow($rem, $length);
      $n = (int)($n / 10);
    }
    return ($i == $sum);
  }
 
if (armstrong_num($num)) {
  echo $num . " is an Armstrong number.";
} else {
  echo $num . " is not an Armstrong number.";
}

  
?>