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
        <div class="modal-content">
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
        <h1>CHAMPION</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

    <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="champ"><p class="dp"><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="80" height="80"></p><p> SINUGDANAN</p><img src="http://i.imgur.com/Vu9xKxJ.jpg" class="thumb"></div>
            </div>

            <div class="item">
              <div class="champ"><p><img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" width="80" height="80"></p><p> SINUGDANAN</p><img src="http://i.imgur.com/EJ9EFSR.jpg" class="thumb"></div>
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
        
        
  </body>
</html>