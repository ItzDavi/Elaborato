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

  $_SESSION['name'] = $user["name"];
  $_SESSION['surname'] = $user["surname"];
  $_SESSION['id_user'] = $user["id_user"];
  $_SESSION['email'] = $userEmail;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
  </head>
  <body class="bg-dark">
    <div class="container-fluid text-white">
      <div class="row mt-5">
        <div class="col text-center">
          <?php
            if ($user) {
              print '<h1 class="pb-5">Welcome</h1><br>';
              print $_SESSION["email"];
              print '<br><i class="fas fa-home"></i> <a href="../index.php" class="text-white text-decoration-none">Home</a>';
            } else {
            print "Invalid email or password: user not found";
            }
          }

           ?>
        </div>
      </div>
    </div>
  </body>
</html>
