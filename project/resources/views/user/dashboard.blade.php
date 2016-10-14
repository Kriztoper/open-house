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
			
		<div class="jumbotron">
<<<<<<< HEAD
			<div class="container">
				<h1 class="page-header">
					WELCOME TO<br>KOMSAI OPENHOUSE
				</h1>
				<br>
				<div class="container">
					<div class="multiple-items">
						<div class="slick-item">
								<img src="http://imgur.com/CutHNSI.jpg">
								<p>{{ strtoupper("Chain Reaction" ) }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/7BtwEFo.jpg">
								<p>{{ strtoupper("Assasination Classroom") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/7OvTKyv.jpg">
								<p>{{ strtoupper("Domineering") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/z5C1fyC.jpg">
								<p>{{ strtoupper("4 Square") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/rwaV9D3.png">
								<p>{{ strtoupper("White Album 2") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/1rO45FV.jpg">
								<p>{{ strtoupper("BoxHead 2Play") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/9yKJw2j.jpg">
								<p>{{ strtoupper("Charlotte") }}</p>
						</div>
						<div class="slick-item">
								<img src="http://imgur.com/IWC0ekz.png">
								<p>{{ strtoupper("Kimi no na wa") }}</p>
						</div>
					</div>
				</div>
=======
			<div id="welcome" class="container">
				<h3 class="page-header">WELCOME TO</h3>
				<h1 class="page-header">KOMSAI OPENHOUSE</h1>
>>>>>>> c5a41dd1442b7d30c9e4d8573a69327e0410c5f9
			</div>
			<p id="quote">We can't always make the right decision, but we can make every decision right.</p>
			<p id="author">-Google</p>
		</div>

		<nav class="navbar navbar-fixed-bottom">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right navbar-xs">
					<li><a href="#">ABOUT THE DEVELOPERS</a></li>
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
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">KOMSAI OPENHOUSE TOKEN GENERATOR</h4>
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


    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script
</body>
</html>