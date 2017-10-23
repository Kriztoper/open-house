<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  
  <title>KOMSAI OPENHAUS</title>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
  <div class="dropdown">
  <button class="dropbtn">{{ strtoupper(Auth::user()->first_name) }}</button>
  <div class="dropdown-content">
    <a href="{{url('\profile')}}">PROFILE</a>
    <a href="#">ADD TOKENS</a>
    <a href="{{url('logout')}}">LOGOUT</a>
  </div>
</div>
  <h1 class="page-header"> WELCOME TO </h1>
  <h1 class="page-header1"> KOMSAI OPENHOUSE </h1>
  <nav id="top-navbar" class="navbar">
    <div class="container-fluid">
        <ul id="links" class="nav">
          <li><a href="{{url('hall_of_fame')}}">HALL OF FAME</a></li>
          <li><a href="{{url('game')}}">GAMES</a></li>
          <li><a href="{{url('videos')}}">VIDEOS</a></li>
          
        </ul>
    </div>
  </nav>
  <div class="container">
        <ul class="nav1">
          <li><a href="url{{'developers'}}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/dash-bg.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/dash-b3.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/matholyyy.png" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/2.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/3.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/4.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/5.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/6.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../public/images/backgrounds/7.jpg" style="width:100%">
    </div>
  </div>
      
</body>
</html>

<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

</script>