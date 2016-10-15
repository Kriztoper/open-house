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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/modal.css')}}">

</head>
<body>
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

	<div class="container-fluid games">
		<div class="container">
				<h1 id="featured" class="page-header">FEATURED GAMES</h1>
				<div class="single-item">
					<div class="slick-item"><a href="games/fourSquare/four.php"><img src="/images/Featured Games/Feature1.png"></a></div>
					<div class="slick-item"><a href="games/Domineering/Domineering.php"><img src="/images/Featured Games/domineering.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/CoralineQuest.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/mancala.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/chainReaction.png"></a></div>
					<div class="slick-item"><a href=""><img src="/images/Featured Games/DotsTrix.png"></a></div>
					<div class="slick-item"><img src="/images/Featured Games/killerCubes.png"></div>
				</div>
			</div>
	</div>

	<div class="container-fluid more-content">
			<div class="container">
				<h2 class="page-header headers">ACTION</h2>
				<div class="row">
			  		{{-- INSERT STUFF HERE --}}
				</div>
				<h2 class="page-header headers">STRATEGY</h2>
				<div class="row">
					{{-- INSERT STUFF HERE --}}
				</div>
				<h2 class="page-header headers">BOARD GAMES</h2>
				<div class="row">
					{{-- INSERT STUFF HERE --}}
				</div>
			</div>
		</div>
		
		
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
				</form>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-fixed-bottom">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">ABOUT THE DEVELOPERS</a></li>
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
</body>
</html>