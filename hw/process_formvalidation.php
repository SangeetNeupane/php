<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=$_POST['address'];
$age=$_POST['age'];
$password = $_POST['password'];
$error = false;

if (empty($name)) {
  echo "Name is required<br>";
  $error = true;
} elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
  echo "Only letters allowed in name<br>";
  $error = true;
}

if (empty($phone)) {
  echo "Phone is required<br>";
  $error = true;
} elseif (!preg_match("/^98[0-9]{8}$/", $phone)) {
  echo "Phone must be start 98 and should 10 digits<br>";
  $error = true;
}

if (empty($email)) {
  echo "Email is required<br>";
  $error = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email address<br>";
  $error = true;
}
if (empty($address)) {
    echo "Address is required<br>";
    $error = true;
  } elseif (!preg_match("/^[a-zA-Z ]*$/", $address)) {
    echo "Only letters allowed in address<br>";
    $error = true;
  }

if (empty($age)) {
    echo "Age is required<br>";
    $error = true;
} elseif (!preg_match("/^[0-9]*$/", $age)) {
    echo "Only number is allowed in AGE<br>";
    $error = true;
}
elseif ($age>100) {
    echo " AGE Should be less than 100<br>";
    $error = true;
}

if (empty($password)) {
  echo "Password is required<br>";
  $error = true;
} 
elseif (!preg_match('/^[a-zA-Z][a-zA-Z0-9]*[0-9]$/', $password)) {
    echo "Password must start with characters and end  with number.<br>";
    $error = true;
  }
elseif (strlen($password) < 8) {
  echo "Password must be at least 8 characters long<br>";
  $error = true;
}


if (!$error) {
  echo "Form submitted successfully";
}

?>
