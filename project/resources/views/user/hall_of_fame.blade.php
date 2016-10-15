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
              <li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
              <li><a href="{{ url('/game') }}">GAMES</a></li>
              <li><a href="{{ url('/videos') }}">VIDEOS</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(Auth::user()->first_name) }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-left col-xs-12">
                    <li><a href="{{url('/profile')}}">PROFILE</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
                    <li role="separator" class="divider"></li>
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
        <div class="modal-content bg2">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">KOMSAY OPENHOUSE TOKEN GENERATOR</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/tokens') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" class="form-control" name="token_code" placeholder="Enter token code here...">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ url('/developers') }}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>
  </div>

    <div>

      <div class="container">

        <h1>Most Active User</h1>
        <div class="center">
          <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle mostA" width="200" height="200">
          <p class="name">CARLO</p>
        </div>

        <h1>Most Watched Videos</h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            
            <div class="item active mid">
              <p><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="100" height="100"></p>
              <p>Kdrama: Carlo</p>
              <img src="http://i.imgur.com/q4yEc1z.jpg" width="800" height="300">
            </div>

            <div class="item mid">
              <p><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="100" height="100"></p>
              <p>Anime: Carlo</p>
              <img src="http://i.imgur.com/fiXJXhb.jpg" width="800" height="300">
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
       
       <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            
            <div class="item active">
              <div>
                <ul>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/Vu9xKxJ.jpg" width="250" height="250">  
                    </p>
                  </li>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/EJ9EFSR.jpg" width="250" height="250">  
                    </p>
                  </li>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/Vu9xKxJ.jpg" width="250" height="250">  
                    </p>
                  </li>
                  
                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/EJ9EFSR.jpg" width="250" height="250">  
                    </p>
                  </li>

                </ul>
              </div>
            </div>

            <div class="item">
              <div>
                <ul>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/Vu9xKxJ.jpg" width="250" height="250">  
                    </p>
                  </li>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/EJ9EFSR.jpg" width="250" height="250">  
                    </p>
                  </li>

                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/Vu9xKxJ.jpg" width="250" height="250">  
                    </p>
                  </li>
                  
                  <li>
                    <p>
                      <img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="50" height="50">
                    </p>
                    <p>Carlo</p>
                    <p>
                      <img src="http://i.imgur.com/EJ9EFSR.jpg" width="250" height="250">  
                    </p>
                  </li>

                </ul>
              </div>  
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
    </script>      
        
  </body>


</html>