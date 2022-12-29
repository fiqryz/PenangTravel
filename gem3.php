<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/gem.css">
<link rel="stylesheet" href="style/header.css">
<link rel="stylesheet" href="style/general.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
<title>Restoran Tajudin Hussain</title>
<style>

</style>
</head>
<body>

  <div class="header">
    <div class="right">
      <p class="header-title">PenangTravel.com</p>
    </div>
    <div class="navigation">

      <a href="index.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">Home</button></a>
      <a href="aboutus.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">About Us</button></a>
      <a href="menufood.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">Hidden Gems</button></a>
      <a href="menuattraction.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">Attractions</button></a>
      <a href="menuhomestay.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">Bookings</button></a>
      <a href="login.html"><button class="button-header" style="font-family: roboto; font-size: 20px;">Login</button></a>

    </div>
    
   </div>

   <p style="text-align: center; font-family:  Roboto, sans-serif;
   margin-bottom: 10px; font-size: 40px; margin-top: 200px;">Restoran Tajudin Hussain</p>
    
   </div>

  <div class="gem-content">
<div class="pictureshow">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="asset/tajudin1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="asset/tajudin2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="asset/tajudin3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</div>

<div class="gem-info">

  <div class="gem-sipnosis">
    <p style="margin-top: 50px; font-family: roboto;">Restoran Tajuddin Hussain is a nasi kandar restaurant in George Town, Penang. It is located on Queen Street in the city's Little India. 
      The restaurant occupies the ground floor of two adjoining shophouses. In addition to white rice, it also has briyani rice.</p>

      <p style="font-weight: bold;
      margin-top: 40px; font-family: roboto;">Business Hour</p>

      <p>11.00 am until 3.30 pm</p>
      <p>6.30 pm until 10.00 pm</p>

      <p style="font-weight: bold;
      margin-top: 40px; font-family: roboto;">Special</p>

      <p>Nasi Kandar and Nasi Beriyani</p>

      <p style="font-weight: bold;
      margin-top: 40px; font-family: roboto;">Location</p>

      <a href="https://goo.gl/maps/8cn9mCduSXDCDChq8"><p style="font-family: roboto;">45-63, Queen St, Georgetown, 10200 George Town, Penang</p></a>
  </div>
  <div class="gem-contact">gegs</div>
</div>

</div>


<div style="background-color: rgba(11, 61, 161, 0.626);
padding-top: 30px; padding-bottom: 30px; border-radius: 40px; margin-left: 25px; margin-right: 25px;">
    <p style="text-align: center; font-family:  Roboto, sans-serif;
    margin-bottom: 10px; font-size: 40px; color: aliceblue;">Top 3 Hidden Gems</p>
    <div class="column">
      <div class="card">
        <a href="gem1.html"><img src="asset/foodmenu1.png" alt="Avatar" style="width:100%"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Apam Balik Pejabat Pos</b></h4>
          <p style="font-family: roboto;">Lebuh Downing, George Town, 10300 George Town, Pulau Pinang</p>
        </div>
      </div>
      <div class="card">
        <a href="gem2.html"><img src="asset/foodmenu2.png" alt="Avatar" style="width:100%"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Nurul Ikan Bakar Special</b></h4>
          <p style="font-family: roboto;">Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
        </div>
      </div>
      <div class="card">
        <a href="gem3.html"><img src="asset/foodmenu3.png" alt="Avatar" style="width:100%"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Restoran Tajudin Hussain</b></h4>
          <p style="font-family: roboto;">45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
        </div>
      </div>

      <div class="card">
        <a href="gem2.html"><img src="asset/foodmenu2.png" alt="Avatar" style="width:100%"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Nurul Ikan Bakar Special</b></h4>
          <p style="font-family: roboto;">Tun Dr. Lim Chong Eu Hwy, 10100 Gelugor, Penang</p>
        </div>
      </div>
      <div class="card">
        <a href="gem3.html"><img src="asset/foodmenu3.png" alt="Avatar" style="width:100%"></a>
        <div class="container">
          <h4 style="font-family: roboto;"><b>Restoran Tajudin Hussain</b></h4>
          <p style="font-family: roboto;">45-63, Queen St, Georgetown, 10200 George Town, Penang</p>
        </div>
      </div>
     
     
    </div>
  </div>


</body>
</html> 