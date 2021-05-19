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

$email = $_SESSION["email"];
$userID = $_SESSION["id_user"];
$planChecked = $_SESSION["planChecked"];
$planID;
$subscriptionChecked = $_SESSION["subscriptionChecked"];
$today = $_SESSION["today"];
$discount = $_SESSION["discount"];
$total = $_SESSION["total"];
$available = $_SESSION["available"];

if ($planChecked == "premium") {
  $planID = 2;
} else if ($planChecked == "pro") {
  $planID = 3;
} else if ($planChecked == "enterprise"){
  $planID = 4;
}

$insertOrder = "INSERT INTO orders VALUES (NULL, '$userID', '$planID', '$subscriptionChecked', '$discount', '$total', '$today')";
$insertResult = mysqli_query($connection, $insertOrder);

$updateAvailability="UPDATE plans SET available='$available'-1 WHERE id_plan='$planID'";
$updateResult = mysqli_query($connection, $updateAvailability);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Order Confirmed</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
  </head>
  <body class="bg-dark">
    <div class="container text-white mt-5 pt-5">
      <div class="row">
        <div class="col text-center">
          <h3>Thanks for you order !</h3>
          <small>A confirmation will be sent to the provided email</small>
        </div>
      </div>
    </div>
  </body>
</html>
