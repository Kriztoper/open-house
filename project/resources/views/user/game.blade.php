<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>Awesome Games!</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">

</head>
<body>
	<nav class="navbar navbar-fixed-top">
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
        			<a class="dropdown-toggle" data-toggle="dropdown" role="button"> {{ strtoupper(Auth::user()->first_name) }}
        			<span class="caret"></span></a>
       				<ul class="dropdown-menu dropdown-menu-right">
          				<li class="pull-right"><a href="{{url('/profile')}}">PROFILE</a></li>
          				<li class="pull-right"><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
          				<li class="pull-right"><a href="{{url('/logout')}}">LOGOUT</a></li>
        			</ul>
      			</li>
	   		</ul>
  		</div>
	</nav>

	<div class="container-fluid games">
		<div class="container">
				<h1 id="featured" class="page-header">FEATURED GAMES</h1>
				<div class="single-item">
					<div class="slick-item"><a href="games/fourSquare/fourSquare.php"><img src="/images/Featured Games/Feature1.png"></a></div>
					<div class="slick-item"><a href="games/Domineering/Domineering.php"><img src="/images/Featured Games/domineering.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/CoralineQuest.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/mancala.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/chainReaction.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/DotsTrix.png"></a></div>
					<div class="slick-item"><img src="/images/Featured Games/killerCubes.png"></div>
					@foreach($featured as $feat)
					<div class="slick-item">
						<a href="{{ url('/buyGame/'.$feat->gameID) }}">
							<img src="{{url('/'.$feat->fthumbnail)}}">
						</a>
					</div>
					@endforeach
				</div>
			</div>
	</div>

	<div class="container-fluid more-content">
			<div class="container">
				<h2 class="page-header headers">ACTION</h2>
				<div class="row">
			  		@foreach($action as $actions)
			  		<div class="col-md-2">
			  			<div class="thumbnail">
			  				<a href="{{url('buyGame/'.$actions->gameID)}}">
			  					<img src="{{url('/'.$actions->thumbnail)}}" alt="{{$actions->gameName}}">
			  				</a>
			  			</div>
			  		</div>
			  		@endforeach
				</div>
				<h2 class="page-header headers">STRATEGY</h2>
				<div class="row">
					@foreach($Strategy as $strats)
			  		<div class="col-md-2">
			  			<div class="thumbnail">
			  				<a href="{{url('buyGame/'.$strats->gameID)}}">
			  					<img src="{{url('/'.$strats->thumbnail)}}" alt="{{$strats->gameName}}">
			  				</a>
			  			</div>
			  		</div>
			  		@endforeach
				</div>
				<h2 class="page-header headers">BOARD GAMES</h2>
				<div class="row">
					@foreach($boardGames as $boardGame)
			  		<div class="col-md-2">
			  			<div class="thumbnail">
			  				<a href="{{url('buyGame/'.$boardGame->gameID)}}">
			  					<img src="{{url('/'.$boardGame->thumbnail)}}" alt="{{$boardGame->gameName}}">
			  				</a>
			  			</div>
			  		</div>

			  		@endforeach
				</div>
			</div>
		</div>
		
		<br>
		<br>
		<br>
		<br>
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

   	<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>

  	 <script type="text/javascript">
    	$('.single-item').slick({
    		dots: true
    	});
    </script>
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