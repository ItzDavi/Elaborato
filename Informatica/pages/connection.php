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

?>
