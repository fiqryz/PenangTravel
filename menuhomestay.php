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
    <title>Homestay</title>
  </head>
  <body>

    <?php include 'components/navbar.php'; ?>

    <div class="container section-pb">
          
        <p class="section-title">Homestays in Penang</p>
        <div class="row justify-content-center mt-4">
            
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <a href="booking.php"><img src="asset/homestay-menu-1.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Stay SongSong Mount Erskine</b></h4>
                    <p>15, Erskine Grove, Taman Teguh, 10470 Tanjung Tokong, Pulau Pinang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <a href="booking2.php"><img src="asset/homestay-menu-2.jpg" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>The Landmark by Comfy</b></h4>
                      <p>100A-7-2, The Landmark by Katana, Jln Tanjung Tokong, 10470 George Town, Penang</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <a href="booking3.php"><img src="asset/homestay-menu-3.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>RumahKu Georgetown</b></h4>
                    <p>37, Lebuh Noordin, George Town, 10300 George Town, Pulau Pinang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                <a href="booking4.php"><img src="asset/homestay-menu-4.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Dual key system Deluxe Room with Premium Bed Set</b></h4>
                    <p>1, Jalan Pisang Embun, Ayer Hitam,Penang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                <a href="booking5.php"><img src="asset/homestay-menu-5.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Venn Homestay, Balik Pulau</b></h4>
                    <p>Lebuh Sungai Burung 3 Penang, Balik Pulau, Penang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                <a href="booking6.php"><img src="asset/homestay-menu-6.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Carnavon House</b></h4>
                    <p>28 Lorong Carnarvon, Georgetown</p>
                  </div>
                </div>
            </div>
          
        </div>

    </div>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#navbars .nav-item .nav-link[href="menuhomestay.php"]').addClass('active');
        });
    </script>
    <div class="footer">
  <p>PenangTravel.com</p>
</div>
  </body>
</html>