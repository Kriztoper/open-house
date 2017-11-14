<!DOCTYPE html>
<html>
    <head>
        <title>Web Apps</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<<<<<< Updated upstream -->
        <link rel="stylesheet" href="css/web_apps.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/forum.css">

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
              <li><a href="{{ url('/web_apps') }}">WEB APPS</a></li>  
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

    <nav class="navbar navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right navbar-xs">
          <li><a href="{{url('/developers')}}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>
    
  </div>

  



    
<br><br>
<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Foodesire</div>
        <p class="card__text">Food searching app covered in Tacloban City.</p>        
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button class="btn btn--block card__btn"><a target="_blank" href="http://foodesire.herokuapp.com">Button</a></button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Foodesire</div>
        <p class="card__text">Food searching app covered in Tacloban City.</p>
        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
        <button class="btn btn--block card__btn"><a target="_blank" href="http://foodesire.herokuapp.com">Button</a></button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">Foodesire</div>
        <p class="card__text">Food searching app covered in Tacloban City.</p>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button class="btn btn--block card__btn"><a target="_blank" href="http://foodesire.herokuapp.com">Button</a></button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title">Foodesire</div>
        <p class="card__text">Food searching app covered in Tacloban City.</p>
        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
        <button class="btn btn--block card__btn"><a target="_blank" href="http://foodesire.herokuapp.com">Button</a></button>
      </div>
    </div>
  </li>
</ul>
  {{--  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif  --}}
  {{--  <div class="container" id="forums-cntnr">
    <div id="forum-form">
        <form method="post" action="{{url('forum')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button id="forum-btn" >Submit</button>
            <textarea id="forum-area" name="title" placeholder="Enter topic title" required></textarea>
        </form>
    </div>
    <div id="forum-titles-list">
      <ul id="titles">
        @foreach ($forums as $index=>$forum)
          <li class="title-card">
          <a id="titles-link" href="{{url('comments/'.$forum->id)}}">
          {{$forum->title}} <span id="author">{{$forum->author}}</span></a></li>
        @endforeach
      </ul>
    </div>
  </div>  --}}
  





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
  @if(count($error)>0 && Session::get('error') == 400)
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