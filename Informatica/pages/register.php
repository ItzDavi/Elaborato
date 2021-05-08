<?php
session_start();

//require_once("connection.php");

$server = "localhost";
$database = "gsh";
$user = "root";
$dbPassword = "";

$connection = mysqli_connect($server, $user, $dbPassword, $database);


if (!$connection) {
  echo("Failed to connect to the database");
  exit();
} else {
  $userName = $_POST['user-name'];
  $userSurname = $_POST['user-surname'];
  $userEmail = $_POST['user-email'];
  $userPassword = $_POST['user-password'];

  $checkEmail = "SELECT * FROM USERS WHERE email='$userEmail' LIMIT 1";
  $checkResult = mysqli_query($connection, $checkEmail);
  $user = mysqli_fetch_assoc($checkResult);

  if ($user) {
    echo("Email already registered");
  } else {
    $query = "INSERT INTO USERS (id_user, name, surname, email, user_password) VALUES (NULL, '$userName', '$userSurname', '$userEmail', '$userPassword')";
    $insert = mysqli_query($connection, $query);

    echo("Registration completed successfully");

    $_SESSION['email'] = $userEmail;
  }
}

?>
