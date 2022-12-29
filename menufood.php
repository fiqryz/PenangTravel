<?php 

  include 'dbcon.php'; 
  $sql = "SELECT * FROM restaurant";
  $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/custom.css">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/footer.css">
    <title>Hidden Gems</title>
  </head>
  <body>

    <?php include 'components/navbar.php'; ?>

    <div class="container section-pb">
          
        <p class="section-title">Hidden Gems of Penang</p>
        <div class="row justify-content-center mt-4">

            <?php if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_assoc($result)){?>

                         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
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
           
          <!--   <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <a href="gem2.php"><img src="asset/foodmenu2.png" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Nurul Ikan Bakar Special</b></h4>
                      <p>Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <a href="gem3.php"><img src="asset/foodmenu3.png" alt="Avatar" class="w-100"></a>
                    <div class="container mt-3">
                      <h4><b>Restoran Tajudin Hussain</b></h4>
                      <p>45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
                    </div>
                  </div>
            </div>
           -->
        </div>

    </div>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#navbars .nav-item .nav-link[href="menufood.php"]').addClass('active');
        });
    </script>
    <div class="footer">
  <p>PenangTravel.com</p>
</div>
  </body>
</html>