<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
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
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
  echo "Phone must be 10 digits<br>";
  $error = true;
}

if (empty($email)) {
  echo "Email is required<br>";
  $error = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email address<br>";
  $error = true;
}

if (empty($password)) {
  echo "Password is required<br>";
  $error = true;
} elseif (strlen($password) < 8) {
  echo "Password must be at least 8 characters long<br>";
  $error = true;
}

if (!$error) {
  echo "Form submitted successfully";
}

?>
