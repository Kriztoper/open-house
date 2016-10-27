<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  
  <title>KOMSAI OPENHAUS</title>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/content.css">
    <link rel="stylesheet" type="text/css" href="../css/gamenavbar.css">
    <link rel="stylesheet" type="text/css" href="../css/modal.css">

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
            <li class="active"><a href="{{ url('/exitVideo') }}">BACK</a></li>
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
          <h4 class="modal-title">KOMSAI OPENHOUSE TOKEN GENERATOR</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/tokens') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="text" class="form-control" name="token_code" placeholder="Enter token code here...">
          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron">
      <div class="container-fluid">
            <center>
                <video height="400" width="400" controls>
                  <source src="{{url('/'.$videos->videoURL)}}" type="video/mp4">
                @if(strpos($videos->videoURL, '.flv')>0)
                  <object>
                  <param name="game" value="{{url(''.$videos->videoURL)}}">
                    <embed src="{{ url(''.$videos->videoURL) }}" width="400" height="400">
                  </object>
                @elseif(strpos($videos->videoURL, '.mkv')>0)
                <source src="{{url('/'.$videos->videoURL)}}" type="video/mkv">
                 @elseif(strpos($videos->videoURL, '.ogg')>0)
                <source src="{{url('/'.$videos->videoURL)}}" type="video/ogg">
                 @elseif(strpos($videos->videoURL, '.mov')>0)
                <source src="{{url('/'.$videos->videoURL)}}" type="video/mov">
                    Your browser does not support HTML5 video.
                @endif
                </video>
                <h4>{{"".$videos->videoName}}</h4>
            </center>
      </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
</body>
</html>