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
    <title>GSH - Purchase</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
  </head>
  <body>
    <div id="bgvideo-div mb-0">
      <video id="bgvideo-start" playsinline autoplay muted loop src="../assets/videos/neon.mp4"></video>

      <div class="container-fluid text-white" id="video-text">
        <h1 id="h1-text" class="mt-5 pt-5">Gaming Server Hosting</h1>
        <h5 id ="h5-text" class="pb-5 pt-3">Secure, Fast, Easy</h5>
      </div>
    </div>

    <div class="container-fluid">
      <h1 class="text-center pt-5">Purchase</h1>
    </div>

    <div class="login-btn pb-5 pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col text-center">
            <?php
              if (isset($_SESSION["email"])) {
                print ('<button class="btn btn-primary w-25 mb-3" type="button" name="button" target="_blank()" hidden><a class="text-white text-decoration-none" href="login.html">Login</a></button>');
              } else {
                print ('<button class="btn btn-primary w-25 mb-3" type="button" name="button" target="_blank()"><a class="text-white text-decoration-none" href="login.html">Login</a></button>');
              }
             ?>
          </div>
        </div>
      </div>

      <form class="" action="order.php" method="post">
          <h3 class="text-center pb-5 pt-3 border-top">Configuration</h3>
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">Premium</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$9.99<small class="text-muted fw-light">/month</small></h2>
                  <a target="_blank" href="plans.php" class="card-link">Details</a><br>
                  <input class="mt-3" type="radio" name="plan" value="premium" required checked>
                </div>
              </div>
            </div>

            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">Pro</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$29.99<small class="text-muted fw-light">/month</small></h2>
                  <a target="_blank" href="plans.php" class="card-link">Details</a><br>
                  <input class="mt-3" type="radio" name="plan" value="pro" required>
                </div>
              </div>
            </div>

            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">Enterprise</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$99.99<small class="text-muted fw-light">/month</small></h2>
                  <a target="_blank" href="plans.php" class="card-link">Details</a><br>
                  <input class="mt-3" type="radio" name="plan" value="enterprise" required>
                </div>
              </div>
            </div>
          </div>

          <div class="row pt-5">
            <div class="col text-center">
              <h3 class="pb-5">Month Subscription</h3>
            </div>
          </div>

          <div class="row pb-5" name="subscription">
            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">1 Month</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li><small>0% discount</small></li>
                  </ul>
                  <input class="mt-2" type="radio" name="subscription" value="1" required checked>
                </div>
              </div>
            </div>

            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">3 Months</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li><small>3% discount</small></li>
                  </ul>
                  <input class="mt-2" type="radio" name="subscription" value="3" required>
                </div>
              </div>
            </div>

            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">6 Months</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li><small>6% discount</small></li>
                  </ul>
                  <input class="mt-2" type="radio" name="subscription" value="6" required>
                </div>
              </div>
            </div>

            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">12 Months</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li><small>12% discount</small></li>
                  </ul>
                  <input class="mt-2" type="radio" name="subscription" value="12" required>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3 pt-4 border-top">
            <div class="col text-center">
              <?php
                if (isset($_SESSION["email"])) {
                  print '<button class="btn btn-primary mb-3 w-25" type="submit" name="button"><a class="text-white text-decoration-none">Order Now</a></button>';
                } else {
                  print '<button class="btn btn-primary mb-3 w-25" type="submit" name="button" disabled><a class="text-white text-decoration-none disabled">Order Now</a></button>';
                }
               ?>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <?php
                if (!isset($_SESSION["email"])) {
                  print '<small class="text-center">You must login before placing an order !</small>';
                }
              ?>
          </div>
        </div>


        </form>
      </div>
    </div>

    <div class="container-fluid bg-dark text-white">
      <div class="row">
        <div class="col text-center">
          <h2 class="pb-3 pt-3">Useful links</h2>
        </div>
      </div>
      <div class="row fluid pb-2 text-center">
        <div class="col fluid">
          <a href="../index.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-home fa-2x pb-1"></i><br>Home</a>
        </div>
        <div class="col">
          <a href="plans.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-book-open fa-2x pb-1"></i><br>Plans</a>
        </div>
        <div class="col">
          <a href="register.html" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-user-plus fa-2x pb-1"></i><br>Sign Up</a>
        </div>
        <div class="col">
          <a href="login.html" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-user-lock fa-2x pb-1"></i><br>Sign In</a>
        </div>
        <div class="col">
          <a href="freeserver.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-kiwi-bird fa-2x pb-1"></i><br>Free</a>
        </div>
      </div>
    </div>
  </body>
</html>
