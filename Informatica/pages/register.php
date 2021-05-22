<?php
//Start session
session_start();

//require_once("connection.php");
//Database variables
$server = "localhost";
$database = "gsh";
$user = "root";
$dbPassword = "";

//Database connection
$connection = mysqli_connect($server, $user, $dbPassword, $database);

//Database connection check
if (!$connection) {
  echo("Failed to connect to the database");
  exit();
} else {
  //Assigning variables values from $_POST
  $userName = $_POST['user-name'];
  $userSurname = $_POST['user-surname'];
  $userEmail = $_POST['user-email'];
  $userPassword = $_POST['user-password'];

  //Check if email is already registred
  //Email check SQL code
  $checkEmail = "SELECT * FROM USERS WHERE email='$userEmail' LIMIT 1";\
  //Run email SQL query
  $checkResult = mysqli_query($connection, $checkEmail);
  //Fetch an array with resulting datas
  $user = mysqli_fetch_assoc($checkResult);

  //If user alreayd exists
  if ($user) {
    //Assigning value to $message
    $message = "Email already registered";
  } else {
    //Account registration SQL code
    $query = "INSERT INTO USERS (id_user, name, surname, email, user_password) VALUES (NULL, '$userName', '$userSurname', '$userEmail', '$userPassword')";
    //Run account registration query
    $insert = mysqli_query($connection, $query);

    //Assigning value to $message
    $message = "Registration completed successfully";

    //Assigning values to $_SESSION from user input
    $_SESSION["email"] = $userEmail;
    $_SESSION["name"] = $userName;
    $_SESSION["name"] = $userSurname;
    $_SESSION["id_user"] = $user["id_user"];
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--CSS links-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>GSH - Sign Up</title>
  </head>
  <body class="bg-dark text-white">
    <h1 class="text-center mt-5 pt-5">
      <!--PHP message-->
      <?php echo $message ?>
    </h1>
    <h3 class="text-center"><a href="../index.php" class="text-decoration-none text-center">Home</a></h3>
  </body>
</html>
