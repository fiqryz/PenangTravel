<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="style/menu.css">
      <link rel="stylesheet" href="style/header.css">
      <link rel="stylesheet" href="style/custom.css">
      <link rel="stylesheet" href="asset/css/bootstrap.css">
      <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style/footer.css">
      <title>Attraction</title>
  </head>
  <body>

    <?php include 'components/navbar.php'; ?>

    <div class="container section-pb">
          
        <p class="section-title">Hidden Gems of Penang</p>
        <div class="row justify-content-center mt-4">
            
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <a href="attraction1.php"><img src="asset/attractionmenu1.png" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Penang Street Art</b></h4>
                    <p>316, Beach St, Georgetown, 10300 George Town, Penang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <a href="attraction2.php"><img src="asset/attraction-menu-2.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Aspen Vision City</b></h4>
                      <p> Lebuhraya Bandar Cassia, 14110, Simpang Ampat</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <a href="attraction3.php"><img src="asset/attraction-menu-5.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Taman Rimba Teluk Bahang</b></h4>
                      <p>Lorong Rimba, Teluk Bahang, 11050 Tanjung Bungah, Pulau Pinang</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                  <a href="attraction4.php"><img src="asset/attraction-menu-4.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Taman Botani</b></h4>
                      <p>Kompleks Pentadbiran,Bangunan Pavilion, Jalan Kebun Bunga, 10350 George Town, Pulau Pinang</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                  <a href="attraction5.php"><img src="asset/attraction-menu-3.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Taman Belia</b></h4>
                      <p>10450 George Town, Penang</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                  <a href="attraction6.php"><img src="asset/attraction-menu-6.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Xcess Penang</b></h4>
                      <p>163D-7.06-7.16 & L8.02-8.-5, Gurney Paragon, Persiaran Gurney, 10250 George Town, Pulau Pinang</p>
                    </div>
                  </div>
            </div>
          
        </div>

    </div>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#navbars .nav-item .nav-link[href="menuattraction.php"]').addClass('active');
        });
    </script>
    <div class="footer">
  <p>PenangTravel.com</p>
</div>
  </body>
</html>