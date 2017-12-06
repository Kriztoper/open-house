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

  


<br><br><br>  



<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
               
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#all">All</a></li>
                      @if(count($categories) > 0) 
                        @foreach($categories as $cat)
                          <li><a href="web_apps/{{$cat->id}}/category">{{$cat->category}}</a></li>
                        @endforeach
                     @endif
                    </ul>
                </div>
                {!!Form::open(array('url' => '/web_apps', 'method'=>'GET', 'files' => true))!!}
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
                {!!Form::close()!!}
            </div>
             
        </div>
        <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">+ Web App</a>
        <div id="myModal2" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Webapp</h4>
              </div>
              <div class="modal-body">
                {!!Form::open(array('url' => '/web_apps/new', 'method'=>'POST', 'files' => true))!!}
                  <input type="file" class="form-control" accept="image/*" name="image" required placeholder="WebApp Image">
                  <input type="text" class="form-control" name="web_title" required placeholder="WebApp Title">
                  <input type="text" class="form-control" name="web_link" required placeholder="App link">
                  <input type="text" class="form-control" name="web_desc" required placeholder="App Description">
                  <label>Category: </label>
                  <select name="category" class="form-control" style="width:350px">
                  @foreach ($categories as $cat)
                      <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                  @endforeach 
                   
                  </select> 
                  <br/>
                  <button type="submit" class="btn btn-default">Submit</button>
                {!!Form::close()!!}
              </div>
            </div>
          </div>
        </div>


        <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">+ Category</a>

        <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Category</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('web_apps')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control" name="x" placeholder="Category Name">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
                <div>
                  <h4 class="modal-title">Existing Categories</h4>
                  @if(count($categories) > 0) 
                    @foreach($categories as $cat)
                      <li>{{$cat->category}}</li>
                      <form method="get" action="{{url('web_apps/'.$cat->id.'/destroyCategory')}}"> <button class="btn btn-default">Delete</button> </form>
                      
                      <form method="post" action="{{url('web_apps/'.$cat->id.'/updateCategory')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="form-control" name="x" placeholder="Category Name" value="{{$cat->category}}">
                        <button class="btn btn-default">Update</button> 
                      </form>
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>
<br>
<ul class="cards">
  @if(count($webapps) > 0) 
    @foreach($webapps as $web)
      <li class="cards__item">
        <div class="card">
          <a href="{{$web->link}}"><div class="card__image" style="background-image: url({{$web->imagename}})"></div></a>
          <div class="card__content">
            <div class="card__title">{{$web->pagename}} ID: {{$web->id}}</div>
            <p class="card__text">Category: {{$web->category}}</p>        
            <p class="card__text">{{$web->pagedescription}} 
            This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up. </p>

            <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Edit</a>

            <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal4">Delete</a>
            
          </div>
        </div>
      </li>
    @endforeach

            <div id="myModal3" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Webapp {{$web->id}}</h4>
                  </div>
                  <div class="modal-body">
                    {!!Form::open(array('url' => '/web_apps/'.$web->id, 'method'=>'POST', 'files' => true))!!}
                      <input type="file" class="form-control" accept="image/*" name="image" placeholder="WebApp Image" value="{{$web->imagename}}">
                      <input type="text" class="form-control" name="web_title" required placeholder="WebApp Title" value="{{$web->pagename}}">
                      <input type="text" class="form-control" name="web_link" required placeholder="App link" value="{{$web->link}}">
                      <input type="text" class="form-control" name="web_desc" required placeholder="App Description" value="{{$web->pagedescription}}">
                      <label>Category: {{$web->category}}</label>
                      <select name="category" class="form-control" style="width:350px">
                      @foreach ($categories as $cat)
                          @if($cat==$web->category)
                            <option selected="selected" value="{{ $cat->id }}" value="{{$web->category}}">{{ $cat->category }}</option>
                          @else
                          <option value="{{ $cat->id }}" value="{{$web->category}}">{{ $cat->category }}</option>
                          @endif
                      @endforeach 
                       
                      </select> 
                      <br/>
                      <button type="submit" class="btn btn-default">Submit</button>
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>

            <div id="myModal4" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Webapp</h4>
                  </div>
                  <div class="modal-body">
                    {!!Form::open(array('url' => '/web_apps/'.$web->id.'/delete', 'method'=>'GET', 'files' => true))!!}
                      <label>Are you sure you want to delete this WebApp? </label>
                      <br/>
                      <button type="submit" class="btn btn-default">Yes</button>
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>
  @endif
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

<script type="text/javascript">
  function AddCategory() {
    alert("wew");
  }

</script>
<style type="text/css">
  
.card__image--flowers {
  background-image: url(IMG_1060.jpg);
}
.card__image--river {
  background-image: url(https://unsplash.it/800/600?image=11);
}
.card__image--record {
  background-image: url(https://unsplash.it/800/600?image=39);
}
.card__image--fence {
  background-image: url(https://unsplash.it/800/600?image=59);
}
</style>