<?php session_start(); ?>

<nav class="navbar navbar-expand-md navbar-light fixed-top header-color hpadding">
  <div class="container-fluid">
    <a class="navbar-brand htitle-color" href="#">PenangTravel.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbars">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link nav-color" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" aria-current="page" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" aria-current="page" href="menufood.php">Hidden Gems</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" aria-current="page" href="menuattraction.php">Attractions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" aria-current="page" href="menuhomestay.php">Bookings</a>
        </li>
      </ul>
      <div>
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <?php if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])) {?>
            <li class="nav-item">
              <a class="nav-link nav-color1" aria-current="page" href="logout.php">Logout</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link nav-color1" aria-current="page" href="login.php">Login</a>
            </li>
            <?php } ?>
          </ul>
      </div>
    </div>
  </div>
</nav>