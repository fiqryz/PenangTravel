<!DOCTYPE html>
<html>
<head>
  <title>Stay SongSong Mount Erskine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/homestay.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/custom.css">
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/footer.css">
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
    @media screen and (max-width:1000px){
      .homestay-sipnosis{
        margin-right: 0!important;
      }
    }

    @media screen and (max-width:685px){

        .homestay-sipnosis{
          margin-bottom: 20px;
        }
        .homestay-info{
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }

        .submit-btn{
          margin-bottom: 40px;
        }
    }

  </style>
</head>
<body>

  <?php include 'components/navbar.php'; ?>

  <div>
    
    <p class="section-title mb-5">Stay SongSong Mount Erskine</p>
    
  </div>

  <div id="carouselImg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/homestay1a.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="asset/homestay1b.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="asset/homestay1c.png" class="d-block w-100" alt="...">
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
  <br>



<div class="homestay-info mt-4 mb-4">

  <div class="homestay-sipnosis">
    
    <p style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; font-family: roboto;">Stay SongSong Mount Erskine</p>
    <p>
        You're eligible for a Genius discount at Stay SongSong Mount Erskine! To save at this property, all you have to do is sign in.
    Offering free bikes, Stay SongSong is located in George Town. The accommodation will provide you with air conditioning and a terrace.</p>
    <p>There is a full kitchen with a refrigerator and kitchenware. Featuring a shower, shared bathrooms also come with slippers. You can enjoy mountain view and garden view from all the rooms.
      At Stay SongSong you will find a garden, barbecue facilities and a terrace. Other facilities offered at the property include a shared lounge. An array of activities can be enjoyed on site or in the surroundings, including cycling. The property offers free parking.
      Gurney Drive and Gurney Plaza are within 600 m of the property. This holiday home is 16 km from Penang International Airport</p> 

     <p style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; font-family: roboto;">Address</p>

     <a href="https://goo.gl/maps/tm86NP4aCYZQu7bR6"><p>15, Erskine Grove, Taman Teguh, 10470 Tanjung Tokong, Pulau Pinang</p></a>

    <p style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; font-family: roboto;">Contact info</p>

    <p>0125512455</p>

  </div>
 
</div>

</div>


<div class="section-middle1">
    <p class="section-title">Others Homestay</p>
    <div class="column" style="overflow: auto; width: 90%; padding-bottom: 15px;">
      <div class="card">
        <a href="booking2.php"><img src="asset/homestay-menu-2.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>The Landmark by Comfy</b></h4>
          <p style="font-family: Roboto ;">100A-7-2, The Landmark by Katana, Jln Tanjung Tokong, 10470 George Town, Penang</p>
        </div>
      </div>
      <div class="card">
       <a href="booking3.php"> <img src="asset/homestay-menu-3.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>RumahKu Georgetown</b></h4>
          <p style="font-family: Roboto ;">37, Lebuh Noordin, George Town, 10300 George Town, Pulau Pinang</p>
        </div>
      </div>
      <div class="card">
        <a href="booking4.php"><img src="asset/homestay-menu-4.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Dual key system Deluxe Room with Premium Bed Set</b></h4>
          <p style="font-family: Roboto ;">1, Jalan Pisang Embun, Ayer Hitam,Penang</p>
        </div>
      </div>
       <div class="card">
        <a href="booking5.php"><img src="asset/homestay-menu-5.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Venn Homestay, Balik Pulau</b></h4>
          <p style="font-family: Roboto ;">23, Lebuh Sungai Burung 3 Penang, Balik Pulau, Penang</p>
        </div>
      </div>
       <div class="card">
        <a href="booking6.php"><img src="asset/homestay-menu-6.jpg" alt="Avatar" class="w-100"></a>
        <div class="container">
          <h4 style="font-family: Roboto ;"><b>Carnavon House</b></h4>
          <p style="font-family: Roboto ;">28 Lorong Carnarvon, Georgetown</p>
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