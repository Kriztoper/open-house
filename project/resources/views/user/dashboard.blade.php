<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">

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
       					<ul class="dropdown-menu dropdown-menu-right">
          					<li class="pull-right"><a href="{{url('/profile')}}">PROFILE</a></li>
          					<li class="pull-right"><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
          					<li class="pull-right"><a href="{{url('/logout')}}">LOGOUT</a></li>
        				</ul>
      				</li>
	    		</ul>
  			</div>
		</nav>
			
		<div class="jumbotron">

			<div id="welcome" class="container">
				<h3 class="page-header">WELCOME TO</h3>
				<h1 class="page-header">KOMSAI OPENHOUSE</h1>
			</div>
			<div id="rotate">
				<p class="quote">There’s no place like <strong>127.0.0.1</strong></p>
				<p class="quote">That’s what’s cool about working with computers.  They don’t argue, they remember everything, and they don’t drink all your beer.</p>
				<p class="quote">Controlling complexity is the essence of computer programming.</p>
				<p class="quote">The function of good software is to make the complex appear to be simple.</p>
				<p class="quote">Any fool can operate a computer.  Many do.</p>
				<p class="quote">Most of you are familiar with the virtues of a programmer.  There are three, of course: laziness, impatience, and hubris.</p>
				<p class="quote">Most of you are familiar with the virtues of a programmer.  There are three, of course: laziness, impatience, and hubris.</p>
				<p class="quote">The trouble with programmers is that you can never tell what a programmer is doing until it’s too late.</p>
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

	<!-- Modal for tutorial-->
	<div id="tutorialModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div id="tutorialCarousel" class="carousel slide" data-ride="carousel">

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="/images/modal/tutorial_1.png" alt="Welcome">
					    </div>

					    <div class="item">
					      <img src="/images/modal/tutorial_2.png" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="/images/modal/tutorial_3.png" alt="Flower">
					    </div>

					    <div class="item">
					      <img src="/images/modal/tutorial_4.png" alt="Flower">
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#tutorialCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#tutorialCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="js/bodyslide.js"></script>

	<?php $error = Session::get('error'); ?>
	@if($error != null && is_array($error) || $error instanceof Countable && count($error)>0 && Session::get('error') == 400)
	<script>
	$(function()
		{
			$('#myModal').modal({show:true});
			$('h6').show();
	});
	</script>
	@endif

	<?php $error = Session::get('error'); ?>
	@if($error != null && is_array($error) || $error instanceof Countable && count($error)>0 && Session::get('error') == 405)
	<script>
	$(function()
		{
			$('#tutorialModal').modal({show:true});
	});
	</script>
	@endif
	
</body>
</html>