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
            <button class="btn btn-primary w-25 mb-3" type="button" name="button"><a class="text-white text-decoration-none" href="login.html">Login</a></button>
          </div>
        </div>

        <div class="row pt-3">
          <div class="col border-top">

          </div>
          <div class="col text-center border-top">
            <small class="text-muted">or continue without login</small>
          </div>
          <div class="col border-top">

          </div>
        </div>
      </div>
    </div>

    <div class="user-details">
      <div class="container-fluid w-50">
        <form class="" action="order.php" method="post">
          <div class="row pb-5">
            <div class="col name">
              <label class="form-label" for="name">Name</label>
              <input class="form-control" type="text" name="name" value="" required>
            </div>
            <div class="col surname">
              <label class="form-label" for="surname">Surname</label>
              <input class="form-control" type="text" name="surname" value="" required>
            </div>
          </div>

          <div class="row">
            <div id="email-input-purchase" class="email pb-5 w-100">
              <label class="form-label" for="email-input">Email Address</label>
              <input class="form-control" type="email" name="email" value="" aria-describedby="email-help-text" required>
              <div class="form-text text-muted" id="email-help-text">
                <small>We will never share your email</small>
              </div>
            </div>
          </div>

          <h3 class="text-center pb-5 pt-3 border-top">Configuration</h3>

          <div class="row">
            <div class="col text-center">
              <div class="card">
                <div class="card-header">
                  <h4 class="">Premium</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$9.99<small class="text-muted fw-light">/month</small></h2>
                  <a target="_blank" href="plans.php" class="card-link">Details</a><br>
                  <input class="mt-3" type="radio" name="plan" value="premium" required>
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
                  <input class="mt-2" type="radio" name="subscription" value="1" required>
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
              <button class="btn btn-primary mb-3 w-25" type="submit" name="button"><a class="text-white text-decoration-none">Order Now</a></button>
            </div>
          </div>

        </form>
      </div>
    </div>

  </body>
</html>