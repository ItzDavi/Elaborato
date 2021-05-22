<?php

//Start the session
session_start();

//Database variables
$server = "localhost";
$database = "gsh";
$user = "root";
$dbpassword = "";

//Database connection
$connection = mysqli_connect($server, $user, $dbpassword, $database);

//Database conneciton check
if (!$connection) {
  echo("Failed to connect to the database");
  exit();
}

//Assigning value to variables
$email = $_SESSION["email"];
$userID = $_SESSION["id_user"];
$planChecked = $_SESSION["planChecked"];
$planID;
$subscriptionChecked = $_SESSION["subscriptionChecked"];
$today = $_SESSION["today"];
$discount = $_SESSION["discount"];
$total = $_SESSION["total"];
$available = $_SESSION["available"];

//Assign planID a value based on plan checked
if ($planChecked == "premium") {
  $planID = 2;
} else if ($planChecked == "pro") {
  $planID = 3;
} else if ($planChecked == "enterprise") {
  $planID = 4;
}

//Add order SQL code
$insertOrder = "INSERT INTO orders VALUES (NULL, '$userID', '$planID', '$subscriptionChecked', '$discount', '$total', '$today')";
//Run order SQL query
$insertResult = mysqli_query($connection, $insertOrder);

//Update availability SQL code
$updateAvailability="UPDATE plans SET available='$available'-1 WHERE id_plan='$planID'";
//Run update SQL query
$updateResult = mysqli_query($connection, $updateAvailability);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Order Confirmed</title>
    <!--CSS links-->
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
  </head>
  <body class="bg-dark">
    <div class="container text-white mt-5 pt-5">
      <div class="row">
        <!--Order confirmation text-->
        <div class="col text-center">
          <h3>Thanks for you order !</h3>
          <small>A confirmation will be sent to the provided email</small>
        </div>
      </div>
    </div>
  </body>
</html>
