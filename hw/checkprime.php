<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query String Prime</title>
</head>
<body>
    <h1>Check Prime Number:- <a href="checkprime.php?num=7">Click Here</a></h1>
</body>
</html>
<?php
$num=isset($_GET['num'])?$_GET['num']:15;

function primenum($n) {
  if ($n <= 1) {
    return false;
  }
  for ($i = 2; $i < $n; $i++) 
  {
    if ($n % $i == 0)
     {
      return false;
     }
  }
  return true;
}

if (primenum($num)) {
  echo $num . " is a prime number.";
} else {
  echo $num . " is not a prime number.";
}

?>