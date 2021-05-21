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
    $message = "Email already registered";
  } else {
    $query = "INSERT INTO USERS (id_user, name, surname, email, user_password) VALUES (NULL, '$userName', '$userSurname', '$userEmail', '$userPassword')";
    $insert = mysqli_query($connection, $query);

    $message = "Registration completed successfully";

    $_SESSION["email"] = $userEmail;
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>GSH - Sign Up</title>
  </head>
  <body class="bg-dark text-white">
    <h1 class="text-center mt-5 pt-5">
      <?php echo $message ?>
    </h1>
    <h3 class="text-center"><a href="../index.php" class="text-decoration-none text-center">Home</a></h3>
  </body>
</html>
