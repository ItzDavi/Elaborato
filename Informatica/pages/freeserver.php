<?php
session_start();

$server = "localhost";
$database = "gsh";
$user = "root";
$dbpassword = "";

$connection = mysqli_connect($server, $user, $dbpassword, $database);

if (!$connection) {
  echo("Failed to connect to the database");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>GSH - Free</title>
  </head>
  <body class="bg-dark text-white">
    <h1 class="text-center mt-5 pt-5">Your free server will start soon..</h1>
    <h4 class="text-center mt-5 pt-5">Free server does NOT require an account</h4>
    <h6 class="text-center bg-danger">Free servers are time limited to 2 hours per day</h6>

    <h6 class="text-center mt-5 pt-5">Looking for something more ?</h6>
    <h6 class="text-center">See our <a href="plans.php" class="text-decoration-none">plans</a></h6>
  </body>
</html>
