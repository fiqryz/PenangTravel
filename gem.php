<?php
  
    include 'dbcon.php'; 

    $rid = $_GET['rid'];
    $sql = "SELECT * FROM restaurant WHERE r_id ='$rid'";
    $result = mysqli_query($conn, $sql);




?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/attraction.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/custom.css">
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/footer.css">
  <title>Food Details</title>
  <style>


    /* width */
    .column::-webkit-scrollbar {
      width: 6px !important;
      height: 6px !important;
    }

    /* Track */
    .column::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    .column::-webkit-scrollbar-thumb {
      background: #000; 
    }

    /* Handle on hover */
    .column::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }

    @media screen and (max-width: 450px){
      .column{
         margin-top: 20px !important;
         margin-left: 100px !important;
         margin-right: 100px !important;
      }

      .section-title{
        font-size: 30px !important;
      }
    }

    .nonclick{
        pointer-events: none;
    }

  </style>
</head>
<body>

   <?php include 'components/navbar.php'; ?>

  <?php while($row = mysqli_fetch_assoc($result)){

        $count = 0;
        $img1 = $row['image1'];
        $img2 = $row['image2'];
        $img3 = $row['image3'];

        if(!empty($img1)){
          $count++;
        }

        if(!empty($img2)){
          $count++;
        }

        if(!empty($img3)){
          $count++;
        }


   ?> 

  <div>
    
    <p class="section-title mb-5"><?php echo $row['r_name']; ?></p>
    
  </div>

  <div id="carouselImg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php for ($x = 1; $x <= $count; $x++) { ?>

          <?php $slide = $x - 1; ?>
          <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="<?php echo $slide; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $x; ?>"></button>
         
      <?php } ?>
      
    </div>
    <div class="carousel-inner">

      <?php for ($x = 1; $x <= $count; $x++) { ?>

        <?php if($x == 1){ ?>
        <div class="carousel-item active">
        <?php }else{ ?>
        <div class="carousel-item">
        <?php } ?>

          <?php if($x == 1){ ?>
          <img src="admin/<?php echo $img1; ?>" class="d-block w-100">
          <?php }elseif($x == 2){ ?>
          <img src="admin/<?php echo $img2; ?>" class="d-block w-100">

          <?php }elseif($x == 3){ ?>

          <img src="admin/<?php echo $img3; ?>" class="d-block w-100">
          <?php }?>

        </div>

      <?php } ?>
     <!--  
      <div class="carousel-item">
        <img src="asset/apom1.png" class="d-block w-100" alt="...">
      
      </div>
      <div class="carousel-item">
        <img src="asset/apom3.png" class="d-block w-100" alt="...">
     
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImg" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselImg" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="gem-info mt-5 mb-5">

  <div class="gem-sipnosis">

    <p style="font-weight: bold; margin-top: 25px; margin-bottom: 10px;"><?php echo $row['r_name']; ?></p>

    <p style="margin-top: 30px;"><?php echo nl2br($row['r_desc']); ?></p>

    <?php if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id']) ){ ?>
    <a class="btn btn-dark btn-voucher">
       
    </a>
    <?php }else{ ?>
    <a class="btn btn-dark" href="login.php">
       Login Now
    </a>
    <?php } ?>
    <p style="font-weight: bold;
      margin-top: 40px;"></p>

    <p></p>

     
  </div>
  <div class="gem-contact">

    <p style="font-weight: bold;
    margin-top: 25px; font-family:  Roboto;">Business Hour</p>

    <p><?php echo nl2br($row['r_businesshour']); ?></p>

    <p style="font-weight: bold;
    margin-top: 40px; font-family: Roboto;">Location</p>

    <a href="https://maps.google.com/?q=<?php echo $row['r_location']; ?>"><p style="font-family:  Roboto; color: aliceblue; font-style: italic; margin-bottom: 40px;"><?php echo $row['r_location']; ?></p></a>

  </div>

</div>

<?php } ?>

<?php
  

    $sql1 = "SELECT * FROM restaurant";
    $result1 = mysqli_query($conn, $sql1);


?>

<div class="section-middle1">
    <p class="section-title">Others Hidden Gems</p>
    <div class="column" style="overflow: auto; width: 90%; padding-bottom: 15px;">

       <?php if(mysqli_num_rows($result1) > 0){

              while($row1 = mysqli_fetch_assoc($result1)){?>

                

                    <div class="card">
                      <a href="gem.php?rid=<?php echo $row1['r_id']; ?>"><img src="admin/<?php echo $row1['image1']; ?>" alt="<?php echo $row1['r_name']; ?>" class="w-100"></a>
                      <div class="container">
                        <h4 style="font-family: Roboto ;"><b><?php echo $row1['r_name']; ?></b></h4>
                        <p style="font-family: Roboto ;"><?php echo $row1['r_location']; ?></p>
                      </div>
                    </div>

       <?php  }

            }?>
      

     <!--  <div class="card">
       <a href="gem1.php"> <img src="asset/foodmenu2.png" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Nurul Ikan Bakar Special</b></h4>
          <p style="font-family: Roboto ;">Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
        </div>
      </div>
      <div class="card">
        <a href="gem2.php"><img src="asset/foodmenu3.png" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Restoran Tajudin Hussain</b></h4>
          <p style="font-family: Roboto ;">45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
        </div>
      </div> -->
    </div>
  </div>

  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="asset/js/jquery.min.js"></script>
  <script type="text/javascript">
      var uid = "<?php echo $_SESSION['u_id']; ?>";
      var rid = "<?php echo $_GET['rid']; ?>";
      var vid = '';
      var status = '';

      $(document).ready(function(){
          getInfo();
          $('#navbars .nav-item .nav-link[href="menufood.php"]').addClass('active');

        

      });

      function getInfo(){


 
            var cmd = 'check';

            var param = {
                'uid': uid,
                'rid': rid,
                'cmd': cmd
            }


            $.ajax({
                type: "POST",
                url: "check-download.php",
                data: param,
                cache: false,
                success: function(data) {
                  
                    var d = JSON.parse(data);
                 
                    if(!d.status){ 

                        $('.btn-voucher').remove();
                        return;

                    }

                    status = d.data.status; 
                    vid = d.data.vid;
                
                    if(d.data.status == 1){

                        $('.btn-voucher').prop('disabled', true);
                        $('.btn-voucher').removeAttr('href');
                        $('.btn-voucher').removeAttr('download');
                        $('.btn-voucher').html('Downloaded');

                    }else{

                        $('.btn-voucher').prop('disabled', false);
                        $('.btn-voucher').attr('href', `admin/${d.data.voucher_path}`);
                        $('.btn-voucher').prop('download', 'voucher');
                        $('.btn-voucher').html('Download Voucher');



                    }

                    
                    if(status == 1){
                        $('.btn-voucher').addClass('nonclick');
                        $('.btn-voucher').unbind('click');

                    }else{
                         $('.btn-voucher').removeClass('nonclick');
                        $('.btn-voucher').on('click', function(){

                            updateCheck();

                        });
                    }

                  


                },
                error: function(data){

                     
               
                }
            });


      }

       function updateCheck(){



            var cmd = 'update-check';

            var param = {
                'vid': vid,
                'uid': uid,
                'cmd': cmd
            }


            $.ajax({
                type: "POST",
                url: "check-download.php",
                data: param,
                cache: false,
                success: function(data) {
                  
                    var d = JSON.parse(data);
                 
                    if(!d.status){ 

                        return;

                    }

                    getInfo();
                  


                },
                error: function(data){

                     
               
                }
            });


      }

  </script>
<div class="footer">
  <p>PenangTravel.com</p>
</div>
</body>
</html> 