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
      <div class="row">
        <div class="col text-center">
          <h2 class="py-3">Order Summary</h2>
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
          <p id="customer-name"></p>
        </div>
        <div class="col text-center">
          <strong>Surname</strong>
          <p id="customer-surname"></p>
        </div>
        <div class="col text-center">
          <strong>Email</strong>
          <p id="customer-email"></p>
        </div>
      </div>

      <div class="row mx-3 border rounded mt-4">
        <div class="col text-center">
          <strong>Plan</strong>
          <p id="customer-plan"></p>
        </div>
        <div class="col text-center">
          <strong>Subcription</strong>
          <p id="customer-subscription"></p>
        </div>
        <div class="col text-center">
          <strong>Discount</strong>
          <p id="customer-discount"></p>
        </div>
      </div>

      <div class="row mb-4 mt-5">
        <div class="col text-center">
          <h4>Total</h4>
          <strong id="order-total">$</strong>
        </div>
      </div>

      <div class="row mb-2 mt-5">
        <div class="col text-center">
          <button class="btn btn-primary" type="submit" name="button"><a class="text-decoration-none text-white" href="confirm.php">Confirm order</a></button>
        </div>
      </div>

    </div>
  </body>
</html>
