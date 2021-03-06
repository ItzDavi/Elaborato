<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GSH - Gaming Server Hosting</title>
    <!---->
    <!--Stylessheets links-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
  </head>
  <body>
    <!--Initial background video-->
    <div id="bgvideo-div mb-0">
      <video id="bgvideo-start" playsinline autoplay muted loop src="assets/videos/neon.mp4"></video>
      <!--Text over the video-->
      <div class="container-fluid text-white" id="video-text">
        <h1 id="h1-text" class="mt-5 pt-5">Gaming Server Hosting</h1>
        <h5 id ="h5-text" class="pb-5 pt-3">Secure, Fast, Easy</h5>
      </div>
    </div>
    <!--Why do games choose us section-->
    <div id="why" class="why">
      <div class="container-fluid text-center py-5 w-100 mt-0">
        <h1 class="pb-5">Why do gamers choose us ?</h1>
        <div class="row pt-3">
          <div class="col">
            <h4 class="pb-3">Support 24/7</h4>
            <!--<i>=icon, FONTAWESOME-->
            <i class="fas fa-headset fa-3x pb-2 mt-2"></i>
            <ul class="list-unstyled mt-4">
              <li class="py-2">Phone and Email Support 24/7</li>
              <li class="py-2">Help Center Support 24/7</li>
              <li class="py-2">15+ languages supported</li>
            </ul>
          </div>

          <div class="col">
            <h4 class="pb-3">Performances</h4>
            <i class="fas fa-fighter-jet fa-3x pb-2 mt-2"></i>
            <ul class="list-unstyled mt-4">
              <li class="py-2">Intel and AMD Cpus</li>
              <li class="py-2">We use only SSD for storage</li>
              <li class="py-2">Unlimited Gigabit Bandwidth</li>
            </ul>
          </div>

          <div class="col">
            <h4 class="pb-3">Secure</h4>
            <i class="fas fa-key fa-3x pb-2 mt-2"></i>
            <ul class="list-unstyled mt-4">
              <li class="py-2">All servers run on our VPN</li>
              <li class="py-2">Databases are encrypted</li>
              <li class="py-2">Anti-DDos Protection 24/7</li>
            </ul>
          </div>

          <div class="col">
            <h4 class="pb-3">Games</h4>
            <i class="fas fa-hat-wizard fa-3x pb-2 mt-2"></i>
            <ul class="list-unstyled mt-4">
              <li class="py-2">Lots of games supported</li>
              <li class="py-2">Constantly updated</li>
              <li class="py-2">Optimized Gaming Hardware</li>
            </ul>
          </div>

          <div class="col">
            <h4 class="pb-3">User Friendly</h4>
            <i class="fas fa-smile fa-3x pb-2 mt-2"></i>
            <ul class="list-unstyled mt-4">
              <li class="py-2">Easy-to-use Dashboard</li>
              <li class="py-2">Multiple admins support</li>
              <li class="py-2">Easily backup, import and export files</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--Plans section-->
    <div id="plans" class="plans">
      <div class="display text-center px-5 pt-5 border-top">
        <h2 class="text-center">Our Plans</h2>
      </div>

        <div class="container text-center pt-5 pb-5 mt-3">
          <div class="row pb-5">
            <div class="col pr-4 pt-2">
              <!--Bootstrap cards-->
              <!--Free plan card-->
              <div class="card">
                <div class="card-header">
                  <h4 class="">Free</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/month</small></h2>
                  <ul class="list-unstyled">
                    <li class="py-1">0-10 players</li>
                    <li class="py-1">1 admin</li>
                    <li class="py-1">2GB of RAM</li>
                    <li class="py-1">5GB of storage</li>
                    <li class="py-1">Email Support</li>
                    <li class="py-1">Help center Support 24/7</li>
                  </ul>
                  <a target="_blank" href="pages/plans.php" class="card-link">Details</a>
                  <button class="btn btn-primary w-100 mt-3" type="button" name="button"><a href="pages/freeserver.php" target="_blank" class="text-white text-decoration-none">Start Now</a></button>
                </div>
              </div>
            </div>

            <div class="col pr-4 pl-4 pt-2">
              <div class="card">
                <div class="card-header">
                  <!--Premium plan card-->
                  <h4 class="">Premium</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$9.99<small class="text-muted fw-light">/month</small></h2>
                  <ul class="list-unstyled">
                    <li class="py-1">0-50 players</li>
                    <li class="py-1">3 admins</li>
                    <li class="py-1">4GB of RAM</li>
                    <li class="py-1">10GB of storage</li>
                    <li class="py-1">Priority Email Support</li>
                    <li class="py-1">Help center Support 24/7</li>
                  </ul>
                  <a target="_blank" href="pages/plans.php" class="card-link">Details</a>
                  <button class="btn btn-primary w-100 mt-3" type="button" name="button"><a href="pages/purchase.php" target="_blank" class="text-decoration-none text-white">Order Now</a></button>
                </div>
              </div>
            </div>

          <div class="col pr-4 pl-4 pt-2">
            <div class="card">
              <div class="card-header">
                <!--Pro plan card-->
                <h4 class="">Pro</h4>
              </div>
              <div class="card-body">
                <h2 class="card-title pricing-card-title">$29.99<small class="text-muted fw-light">/month</small></h2>
                <ul class="list-unstyled">
                  <li class="py-1">0-150 players</li>
                  <li class="py-1">5 admins</li>
                  <li class="py-1">16GB of RAM</li>
                  <li class="py-1">30GB of storage</li>
                  <li class="py-1">Phone and Email Support</li>
                  <li class="py-1">Help center Support 24/7</li>
                </ul>
                <a target="_blank" href="pages/plans.php" class="card-link">Details</a>
                <button class="btn btn-primary w-100 mt-3" type="button" name="button"><a href="pages/purchase.php" target="_blank" class="text-decoration-none text-white">Order Now</a></button>
              </div>
            </div>
          </div>

          <div class="col pl-4 pt-2">
            <div class="card">
              <div class="card-header">
                <!--Enterprise plan card-->
                <h4 class="">Enterprise</h4>
              </div>
              <div class="card-body">
                <h2 class="card-title pricing-card-title">$99.99<small class="text-muted fw-light">/month</small></h2>
                <ul class="list-unstyled">
                  <li class="py-1">0-300 players</li>
                  <li class="py-1">5 admins</li>
                  <li class="py-1">32GB of RAM</li>
                  <li class="py-1">120GB of storage</li>
                  <li class="py-1">Phone and Email Support</li>
                  <li class="py-1">Help center Support 24/7</li>
                </ul>
                <a target="_blank" href="pages/plans.php" class="card-link">Details</a>
                <button class="btn btn-primary w-100 mt-3" type="button" name="button"><a href="pages/purchase.php" target="_blank" class="text-decoration-none text-white">Order Now</a></button>
              </div>
            </div>

            <div class="">

            </div>
          </div>

        </div>
      </div>
    </div>

    <div id="supported-games" class="supported-games">
      <!--Border-->
      <div class="display text-center pt-5 border-top">
      </div>

      <!--Supported games section-->
      <h2 class="text-center pb-5">Supported Games</h2>
      <div class="container-fluid games-supported">
        <div class="row py-2">
          <!--Fluid image-->
          <img class="img-fluid rounded float-start w-50 h-25 mx-5 py-5" src="assets/website/fortnite.jpg" alt="Fortnite">
          <div class="col">
            <!--Game details-->
            <h3 class="text-center pt-5 mb-5">Fortnite</h3>
            <ul class="list-unstyled text-center">
              <li class="py-3">Play instantly with your friends</li>
              <li class="py-3">Create private matches</li>
              <li class="py-3">PlayGround and Story availables</li>
              <li class="py-3">Always updated at latest version</li>
              <li class="py-3">100% Lag-Free experience</li>
              <li class="py-3">Dedicated hardware</li>
              <li class="py-3">Anti-Hack system</li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mt-3">
          <div class="col">
            <h3 class="text-center pt-3 mt-5 mb-5">Minecraft</h3>
            <ul class="list-unstyled text-center">
              <li class="py-3">Play instantly with your friends</li>
              <li class="py-3">Create private server</li>
              <li class="py-3">Build everything you want</li>
              <li class="py-3">Choose the version you like more</li>
              <li class="py-3">100% Lag-Free experience</li>
              <li class="py-3">Vanilla, Mods, Bukkit and Forge availables</li>
              <li class="py-3">Anti-Hack and X-Ray system</li>
            </ul>
          </div>
          <img class="img-fluid rounded float-end w-50 h-25 mx-5 my-5" src="assets/website/minecraft.jpeg" alt="Minecraft">
        </div>

        <div class="row my-2 mt-3">
          <img class="img-fluid rounded float-start w-50 h-25 mx-5 my-5" src="assets/website/gtav.jpg" alt="GTA V">
          <div class="col">
            <h3 class="text-center pt-3 mt-5 mb-5">Grand Theft Auto 5</h3>
            <ul class="list-unstyled text-center">
              <li class="py-3">Play instantly with your friends</li>
              <li class="py-3">Create private server</li>
              <li class="py-3">Do everything you want</li>
              <li class="py-3">Always updated at latest version</li>
              <li class="py-3">100% Lag-Free experience</li>
              <li class="py-3">Mods availables</li>
              <li class="py-3">Anti-Cheat system</li>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <!--Footer Navbar-->
    <div class="container-fluid bg-dark text-white">
      <div class="row">
        <div class="col text-center">
          <h2 class="pb-3 pt-3">Useful links</h2>
        </div>
      </div>
      <!--Links-->
      <div class="row fluid pb-2 text-center">
        <div class="col fluid">
          <a href="index.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-home fa-2x pb-1"></i><br>Home</a>
        </div>
        <div class="col">
          <a href="pages/plans.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-book-open fa-2x pb-1"></i><br>Plans</a>
        </div>
        <div class="col">
          <a href="pages/register.html" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-user-plus fa-2x pb-1"></i><br>Sign Up</a>
        </div>
        <div class="col">
          <a href="pages/login.html" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-user-lock fa-2x pb-1"></i><br>Sign In</a>
        </div>
        <div class="col">
          <a href="pages/freeserver.php" class="text-decoration-none text-light font-weight-bold"><i class="fas fa-kiwi-bird fa-2x pb-1"></i><br>Free</a>
        </div>
      </div>
    </div>

  </body>
</html>
