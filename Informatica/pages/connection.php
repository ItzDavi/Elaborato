<?php
//Database variables
$server = "localhost";
$database = "gsh";
$user = "root";
$dbpassword = "";

//Database connection
$connection = mysqli_connect($server, $user, $dbpassword, $database);

//Database connection check
if (!$connection) {
  echo("Failed to connect to the database");
  exit();
}

?>
