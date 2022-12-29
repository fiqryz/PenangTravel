<?php 

  include 'dbcon.php'; 
  $sql = "SELECT * FROM restaurant limit 3";
  $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/custom.css">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/footer.css">

    <title>PenangTravel.com</title>
   
  </head>
  <body>

    <?php include 'components/navbar.php'; ?>

    <div class="container section-pb">
          
        <p class="section-title">Top 3 Attractions</p>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                  <a href="attraction1.php"><img src="asset/attractionmenu1.png" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Penang Street Art</b></h4>
                    <p>316, Beach St, Georgetown, 10300 George Town, Penang</p>
                  </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                 <a href="attraction2.php"> <img src="asset/attraction-menu-2.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Aspen Vision City</b></h4>
                    <p> Lebuhraya Bandar Cassia, 14110, Simpang Ampat</p>
                  </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                  <a href="attraction3.php"><img src="asset/attraction-menu-3.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Taman Rimba Teluk Bahang</b></h4>
                    <p>Lorong Rimba, Teluk Bahang, 11050 Tanjung Bungah, Pulau Pinang</p>
                  </div>
                </div>

            </div>
          

        </div>

    </div>

    <div class="section-middle">
        <p class="section-title">Top 3 Hidden Gems</p>
        <div class="row justify-content-center mt-4 card-row">

             <?php if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_assoc($result)){?>

                         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                              <div class="card h-100">
                                <a href="gem.php?rid=<?php echo $row['r_id']; ?>"><img src="admin/<?php echo $row['image1']; ?>" alt="<?php echo $row['r_name']; ?>" class="w-100"></a>
                                <div class="container mt-3">
                                  <h4><b><?php echo $row['r_name']; ?></b></h4>
                                  <p><?php echo $row['r_location']; ?></p>
                                </div>
                              </div>
                          </div>




             <?php  }

                  }else{?>
            

                    <div class="col-12 text-center mb-4">
                        <p>No Data From Database</p>
                    </div>


            <?php } ?>
            
            <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                  <div class="card h-100">
                    <a href="gem2.php"><img src="asset/foodmenu2.png" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Nurul Ikan Bakar Special</b></h4>
                      <p>Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                  <div class="card h-100">
                    <a href="gem3.php"><img src="asset/foodmenu3.png" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Restoran Tajudin Hussain</b></h4>
                      <p>45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
                    </div>
                  </div>
            </div> -->
        </div>
    </div>

    
    <div class="container section-pb">
          
        <p class="section-title1">Top 3 Homestays</p>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                  <a href="booking.php"><img src="asset/homestay-menu-1.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>Stay SongSong Mount Erskine</b></h4>
                    <p>15, Erskine Grove, Taman Teguh, 10470 Tanjung Tokong, Pulau Pinang</p>
                  </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                  <a href="booking2.php"><img src="asset/homestay-menu-2.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>The Landmark by Comfy</b></h4>
                    <p>100A-7-2, The Landmark by Katana, Jln Tanjung Tokong, 10470 George Town, Penang</p>
                  </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">

                <div class="card h-100">
                  <a href="booking3.php"><img src="asset/homestay-menu-3.jpg" alt="Avatar" class="w-100"></a>
                  <div class="container mt-3">
                    <h4><b>RumahKu Georgetown</b></h4>
                    <p>37, Lebuh Noordin, George Town, 10300 George Town, Pulau Pinang</p>
                  </div>
                </div>

            </div>
          

        </div>

    </div>


 
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#navbars .nav-item .nav-link[href="index.php"]').addClass('active');
        });
    </script>

<div class="footer">
  <p>PenangTravel.com</p>
</div>  
  </body>
</html>