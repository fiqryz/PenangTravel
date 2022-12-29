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
  <title>Taman Botani</title>
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

</style>
</head>
<body>

   <?php include 'components/navbar.php'; ?>

  <div>
    
    <p class="section-title mb-5">Taman Botani</p>
    
  </div>

  <div id="carouselImg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/botani1.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="asset/botani2.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="asset/botani3.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div> -->
      </div>
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

    <p style="font-weight: bold; margin-top: 30px; margin-bottom: 10px;">Taman Botani</p>

    <p style="margin-top: 30px;"> Taman Botani also known as the "Waterfall Gardens" because of the cascading waterfall nearby,it is a botanic garden situated on Jalan Air Terjun (Waterfall Road) in George Town, Penang, Malaysia.

The original gardens were established in 1884 from an old quarry site, under the supervision of Charles Curtis, who was the first superintendent, making it one of the oldest botanic gardens built by the British in a colonial settlement.

Penang Botanic Gardens is part of Penang Hill Biosphere Reserve, recognized by UNESCO as the third Biosphere Reserve in Malaysia listed in the World Network of Biosphere Reserve (WNBR).</p>

    

      <p style="font-weight: bold;
      margin-top: 40px;">Activities</p>

      <p>Street Photography</p>
      <p>Recreational Activities</p>
      <p>Flora and Fauna watching</p>


     
  </div>
  <div class="gem-contact">

    <p style="font-weight: bold;
    margin-top: 40px; font-family:  Roboto;">Business Hour</p>

    <p>6am–8pm</p>

    <p style="font-weight: bold;
    margin-top: 40px; font-family:  Roboto;">Location</p>

    <a href="https://goo.gl/maps/StycFQGg12oCVYRc9"><p style="font-family:  Roboto; color: aliceblue; font-style: italic;">Kompleks Pentadbiran,Bangunan Pavilion, Jalan Kebun Bunga, 10350 George Town, Pulau Pinang</p></a>

  </div>

</div>



<div class="section-middle1">
    <p class="section-title">Others Attraction in Penang</p>
    <div class="column" style="overflow: auto; width: 90%; padding-bottom: 15px;">
      <div class="card">
        <a href="attraction1.php"><img src="asset/attractionmenu1.png" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Penang Street Art</b></h4>
          <p style="font-family: Roboto ;">316, Beach St, Georgetown, 10300 George Town, Penang</p>
        </div>
      </div>
      <div class="card">
       <a href="attraction2.php"> <img src="asset/attraction-menu-2.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Aspen Vision City</b></h4>
          <p style="font-family: Roboto ;"> Lebuhraya Bandar Cassia, 14110, Simpang Ampat</p>
        </div>
      </div>
      
      <div class="card">
        <a href="attraction3.php"><img src="asset/attraction-menu-5.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Taman Rimba Teluk Bahang</b></h4>
          <p style="font-family: Roboto ;">Lorong Rimba, Teluk Bahang, 11050 Tanjung Bungah, Pulau Pinang</p>
        </div>
      </div>
      <div class="card">
        <a href="attraction5.php"><img src="asset/attraction-menu-5.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Taman Belia</b></h4>
          <p style="font-family: Roboto ;">10450 George Town, Penang</p>
        </div>
      </div>
      <div class="card">
        <a href="attraction6.php"><img src="asset/attraction-menu-6.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Xcess Penang</b></h4>
          <p style="font-family: Roboto ;">163D-7.06-7.16 & L8.02-8.-5, Gurney Paragon, Persiaran Gurney, 10250 George Town, Pulau Pinang</p>
        </div>
      </div>

      <!-- <div class="card">
        <a href="gem2.html"><img src="asset/foodmenu2.png" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Nurul Ikan Bakar Special</b></h4>
          <p style="font-family: roboto;">Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
        </div>
      </div>
      <div class="card">
        <a href="gem3.html"><img src="asset/foodmenu3.png" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Restoran Tajudin Hussain</b></h4>
          <p style="font-family: roboto;">45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
        </div>
      </div>
      -->
     
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