<!DOCTYPE html>
<html>
    <head>
        <title>Hall Of Fame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<<<<<< Updated upstream -->
        <link rel="stylesheet" href="css/hall_of_fame.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">


<!-- Stashed changes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>
  <body>

  <div class="container">
    <nav id="top-navbar" class="navbar navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img src="http://i.imgur.com/js8s2AR.png?2" alt="OpenHouse">
            </a>
          </div>
          <ul id="tokens" class="nav navbar-nav">
                  <li>
                    <p class="navbar-text"><span class="glyphicon glyphicon-record gold"></span><span class="redfont"> x </span><span class="white">{{Auth::user()->token}}</span></p>
                  </li>
              </ul>
          <ul id="links" class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
              <li><a href="{{ url('/forum') }}">FORUM</a></li>  
              <li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
              <li><a href="{{ url('/game') }}">GAMES</a></li>
              <li><a href="{{ url('/videos') }}">VIDEOS</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button"> {{ strtoupper(Auth::user()->first_name) }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right col-xs-12">
                    <li><a href="{{url('/profile')}}">PROFILE</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
                    <li><a href="{{url('/logout')}}">LOGOUT</a></li>
                </ul>
              </li>
          </ul>
        </div>
    </nav>

    <!-- Modal for token -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <img id="modal-logo" src="http://i.imgur.com/i4LQ5Bi.png" />
            <img src="http://i.imgur.com/2ggNleD.jpg" />
            <h4 class="modal-title"><strong>KOMSAI OPENHOUSE TOKEN GENERATOR</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/tokens') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <center><h6 id="error_message" hidden color="white"> Token code is not valid. Please purchase it at the administrator and 
                try again!! </h6></center>
            <input type="text" class="form-control" name="token_code" placeholder="Enter token code here...">
            <center><button type="submit" class="btn btn-primary" id="modal-button">Get Tokens!!</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-fixed-bottom" id="navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right navbar-xs">
          <li><a href="{{url('/developers')}}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>
    
  </div>

    <div>

      <div class="container">

        <h1>Most Active User</h1>
        <div class="center">
          <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle mostA" width="200" height="200">
          @if(count($mostActives) > 0) 
            @foreach($mostActives as $mA)
              <p class="name para">{{$mA->first_name}}</p>
            @endforeach
          @endif
        </div>
        
        <h1>Most Active Viewer</h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->

          <div class="carousel-inner" role="listbox">
            
            <div class="item active mid">
              <p class="para"><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="100" height="100"></p>
              @if(count($kdrama) > 0) 
                  @foreach($kdrama as $kd)
                      <p class="para">Kdrama: {{$kd->first_name}}</p>
                      <img src="http://i.imgur.com/q4yEc1z.jpg" width="800" height="300">
                  @endforeach
              @endif
            </div>

            <div class="item mid">
              <p class="para"><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="100" height="100"></p>
               @if(count($animes) > 0) 
                  @foreach($animes as $anime)
                      <p class="para">Anime: {{$anime->first_name}}</p>
                      <img src="http://i.imgur.com/fiXJXhb.jpg" width="800" height="300">
                  @endforeach
              @endif
              
            </div>

          </div>

  <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>

        <h1>Most Active Players</h1>
       
       <div id="myCarousel2" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner" role="listbox">

            <?php

              $games = array(
                "http://i.imgur.com/Vu9xKxJ.jpg", "http://i.imgur.com/EJ9EFSR.jpg", "http://i.imgur.com/wxZh1iY.png", "http://i.imgur.com/nXlQlbu.png",
                "http://i.imgur.com/TJvEOkL.png", "http://i.imgur.com/LXiHOJS.png", "http://i.imgur.com/rPi6nTV.png", "http://i.imgur.com/X06IfC8.png",
                "http://i.imgur.com/zxhsW6o.png", "http://i.imgur.com/dKrDe2s.png", "http://i.imgur.com/soEeCsI.png", "http://i.imgur.com/9VjzTu7.png",
                "http://i.imgur.com/1b4S6vn.png", "http://i.imgur.com/PgtXxlZ.png", "http://i.imgur.com/RBUf7CZ.png", "http://i.imgur.com/pBBi14k.png",
                "http://i.imgur.com/AOfiBJd.png", "http://i.imgur.com/ij7nYFB.png", "http://i.imgur.com/tzX1kGl.png", "http://i.imgur.com/49Simlx.png",
                "http://i.imgur.com/UfsnYJQ.png", "http://i.imgur.com/VTUbzHX.png", "http://i.imgur.com/dvFvPIa.png", "http://i.imgur.com/m0UfI88.png",
                "http://i.imgur.com/fICe2B5.jpg", "http://i.imgur.com/kN7CEzt.png", "http://i.imgur.com/EBG3AhZ.png", "http://i.imgur.com/rubf4d2.png",
                "http://i.imgur.com/ByLhtZt.png", "http://i.imgur.com/FLxj6lJ.png", "http://i.imgur.com/797olpD.png", "http://i.imgur.com/znnRKYn.png",
                "http://i.imgur.com/dWX7t1i.png", "http://i.imgur.com/rOkBOfu.png");
             
              $avatars = array(
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", 
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg",
                "http://i.imgur.com/IvLy13w.jpg", "http://i.imgur.com/IvLy13w.jpg");
              $i = 0;
              $count = 0;
              foreach ($posts as $post) { 
                # code...
                if ($i == 0) {
                  echo '<div class="item trans active"><div><ul>';
                  # code...
                }
                else{
                  echo '<div class="item trans"><div><ul>';  
                }

                for ($k=0; $k < 4 && $i > 3; $k++) { 
                  # code...

                  if($i == 32){
                    $k = 2;
                  }
                 // $name = $userC;
                  echo '<li class="lista">';
                  echo '<p class="para"><img src="'.$avatars[$i].'" class="img-circle" width="50" height="50"></p>';
                  echo '<p class="para">'.$post->first_name.'</p>';
                  echo '<p class="para"><img src="'.$games[$i].'" width="250" height="250"></p></li>';

                  $i++;

                }
                if ($i < 3) {
                  echo '<li class="lista">';
                  echo '<p class="para"><img src="'.$avatars[$count].'" class="img-circle" width="50" height="50"></p>';
                  echo '<p class="para">'.$post->first_name.'</p>';
                  echo '<p class="para"><img src="'.$games[$count].'" width="250" height="250"></p></li>';
                  $count++;
                }
                echo '</ul></div></div>';
              }

            ?>

          </div>

          <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>


        </div>
      
      </div>

    </div>
  
  <!-- Modal for error in videos -->
  <div id="errorModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <img id="modal-logo" src="http://i.imgur.com/i4LQ5Bi.png" />
          <img src="http://i.imgur.com/2ggNleD.jpg" />
          <h4 class="modal-title"><strong>KOMSAI OPENHOUSE ERROR 404!</strong></h4>
        </div>
        <div class="modal-body">
                <center><h4 id="error_message"> Feature is still under development. Sorry for the inconvenience. </h4></center>
        </div>
      </div>
    </div>
  </div>
  
   <script>
      jQuery(document).ready(function($) {
        $(window).scroll(function() {
          var scrollPos = $(window).scrollTop(),
            navbar = $('.navbar-fixed-top');

          if (scrollPos > 20) {
              navbar.addClass('change-color');
          } else {
            navbar.removeClass('change-color');
          }
        });
    });

      $('[id^="myCarousel"]').carousel();
    </script>      
    <?php $error = Session::get('error'); ?>
  @if($error != null && count($error)>0 && Session::get('error') == 400)
  <script>
  $(function()
    {
      $('#myModal').modal({show:true});
      $('h6').show();
  });
  </script>
  @endif
  </body>


</html>