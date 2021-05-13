<?php

session_start();

$server = "localhost";
$database = "gsh";
$user = "root";
$dbPassword = "";

$connection = mysqli_connect($server, $user, $dbPassword, $database);

if (!$connection) {
  echo("Failed to connect to the database");
  exit();
} else {
  $userEmail = $_POST['user-email'];
  $userPassword = $_POST['user-password'];

  $checkAccount = "SELECT * FROM USERS WHERE email='$userEmail' AND user_password='$userPassword' LIMIT 1";
  $checkAccResult = mysqli_query($connection, $checkAccount);
  $user = mysqli_fetch_assoc($checkAccResult);

  if ($user) {
    echo("Welcome");
  } else {
    echo("Invalid email or password: user not found");
  }
}

  $_SESSION['email'] = $userEmail;
?>
