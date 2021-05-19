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

$planChecked = $_POST["plan"];
$subscriptionChecked = $_POST["subscription"];

$email = $_SESSION["email"];
$name = $_SESSION["name"];
$surname = $_SESSION["surname"];

$planCost = 0;
$discountPerc = 0;
$discount;

if ($planChecked == "premium") {
  $planCost = 9.99;
  $planID = 2;
} else if ($planChecked == "pro") {
  $planCost = 29.99;
  $planID = 3;
} else if ($planChecked == "enterprise") {
  $planCost = 99.99;
  $planID = 4;
}

if ($subscriptionChecked == 1) {
  $discountPerc = 0;
} else if ($subscriptionChecked == 3) {
  $discountPerc = 3;
} else if ($subscriptionChecked == 6) {
  $discountPerc = 6;
} else if ($subscriptionChecked == 12) {
  $discountPerc = 12;
}

$subtotal = $planCost * $subscriptionChecked;
$discount = round($subtotal * $discountPerc / 100, 2);
$total = round($subtotal - $discount, 2);

$today = date("d.m.y");

$_SESSION["planChecked"] = $planChecked;
$_SESSION["subscriptionChecked"] = $subscriptionChecked;
$_SESSION["today"] = $today;
$_SESSION["discount"] = $discount;
$_SESSION["total"] = $total;


$checkServerAvailable = "SELECT available FROM PLANS WHERE id_plan='$planID'";
$serverQuery = mysqli_query($connection, $checkServerAvailable);
$serverResult = mysqli_fetch_array($serverQuery);


$_SESSION["available"] = $serverResult["available"];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Order Summary</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
  </head>
  <body class="bg-dark">
    <div class="container bg-light mt-5 pb-3">
    <form class="" action="confirm.php" method="post">


      <div class="row">
        <div class="col text-center">
          <h2 class="py-3">Order Summary</h2>
          <?php print $today ?>
        </div>
      </div>

      <div class="row mb-4 mt-5">
        <div class="col text-center">
          <h4>User Details</h4>
        </div>
      </div>

      <div class="row border rounded mx-3">
        <div class="col text-center">
          <strong class="">Name</strong>
          <p id="customer-name"><?php print $_SESSION["name"] ?></p>
        </div>
        <div class="col text-center">
          <strong>Surname</strong>
          <p id="customer-surname"><?php print $_SESSION["surname"] ?></p>
        </div>
        <div class="col text-center">
          <strong>Email</strong>
          <p id="customer-email"><?php print $email; ?></p>
        </div>
      </div>

      <div class="row mx-3 border rounded mt-4">
        <div class="col text-center">
          <strong>Plan</strong>
          <p id="customer-plan"><?php print $planChecked; ?></p>
        </div>
        <div class="col text-center">
          <strong>Subcription</strong>
          <p id="customer-subscription"><?php print $subscriptionChecked; ?> months</p>
        </div>
        <div class="col text-center">
          <strong>Discount</strong>
          <p id="customer-discount">$<?php print $discount; ?></p>
        </div>
      </div>
      <div class="row mb-4 mt-5">
        <div class="col text-center">
          <h4>Total</h4>
          <strong id="order-total">$<?php print $total; ?></strong><br><small>Taxes included</small>
        </div>
      </div>

      <div class="row mb-2 mt-5">
        <div class="col text-center">
          <button class="btn btn-primary" type="submit" name="button"><a class="text-decoration-none text-white" href="confirm.php">Confirm order</a></button>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
