<?php

$server = "localhost";
$database = "gsh";
$user = "root";
$dbpassword = "";

$connection = mysqli_connect($server, $user, $dbpassword, $database);

if (!$connection) {
  echo("Failed to connect to the database");
  exit();
}

$checkSlots = "SELECT id_plan, available FROM plans";

$result = mysqli_query($connection, $checkSlots);

$array = array();
while($row = mysqli_fetch_array($result)){
   array_push($array, $row["available"]);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Plans</title>
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
      <h1 class="text-center py-5">Our Plans</h1>
    </div>

    <div class="container border rounded mb-5">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Features</th>
            <th class="text-center" scope="col">Free</th>
            <th class="text-center" scope="col">Premium</th>
            <th class="text-center" scope="col">Pro</th>
            <th class="text-center" scope="col">Enterprise</th>
          </tr>
        </thead>
        <tbody class="">
          <tr class="">
            <th scope="row" class="text-center">GENERALS</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr class="">
            <th scope="row">Time Limit</th>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
          </tr>

          <tr class="">
            <th scope="row">Max Players</th>
            <td class="text-center">10</td>
            <td class="text-center">50</td>
            <td class="text-center">150</td>
            <td class="text-center">300</td>
          </tr>

          <tr class="">
            <th scope="row">Max Admins</th>
            <td class="text-center">1</td>
            <td class="text-center">3</td>
            <td class="text-center">5</td>
            <td class="text-center">5</td>
          </tr>

          <tr class="">
            <th scope="row" class="text-center">HARDWARE</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr class="">
            <th scope="row">CPU</th>
            <td class="text-center">Intel I5 <small class="text-muted">7° Gen</small></td>
            <td class="text-center">Intel I7 <small class="text-muted">8° Gen</small></td>
            <td class="text-center">Intel I9 <small class="text-muted">9° Gen</small></td>
            <td class="text-center">Intel I9 <small class="text-muted">10° Gen</small></td>
          </tr>

          <tr class="">
            <th scope="row">RAM</th>
            <td class="text-center">2 GB</td>
            <td class="text-center">4 GB</td>
            <td class="text-center">16 GB</td>
            <td class="text-center">32 GB</td>
          </tr>

          <tr class="">
            <th scope="row">Storage</th>
            <td class="text-center">5 GB</td>
            <td class="text-center">10 GB</td>
            <td class="text-center">30 GB</td>
            <td class="text-center">120 GB</td>
          </tr>

          <tr class="">
            <th scope="row" class="text-center">SUPPORT</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <th scope="row">Email Support</th>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">Priority Support</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">Phone support</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr class="">
            <th scope="row" class="text-center">GAMES</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <th scope="row">Minecraft</th>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">Fortnite</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">GTA V</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr class="">
            <th scope="row" class="text-center">SECURITY</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <th scope="row">Automatic Backups</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">Anti-DDos</th>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">Server Anti-Hack</th>
            <td class="text-center text-danger"><i class="fas fa-times"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>

          <tr>
            <th scope="row">VPN</th>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
            <td class="text-center text-success"><i class="fas fa-check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h3 class="text-center mt-5 pt-5 border-top">Server Availability</h3>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col text-center">
          <h3>Free</h3>
          <h5 class="pt-3">Slots: <?php echo $array[0] ?></h5>
        </div>

        <div class="col text-center">
          <h3>Premium</h3>
          <h5 class="pt-3">Slots: <?php echo $array[1] ?></h5>
        </div>

        <div class="col text-center">
          <h3>Pro</h3>
          <h5 class="pt-3">Slots: <?php echo $array[2] ?></h5>
        </div>

        <div class="col text-center">
          <h3>Enterprise</h3>
          <h5 class="pt-3">Slots: <?php echo $array[3] ?></h5>
        </div>
      </div>
    </div>

  </body>
</html>
