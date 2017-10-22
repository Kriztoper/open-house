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

</head>
<body>

	<div class="container-fluid">
		<nav id="top-navbar" class="navbar navbar-default">
			<div class="container-fluid">
    			<div class="navbar-header">
     				<a class="navbar-brand" href="#">
     					<img src="http://i.imgur.com/js8s2AR.png" style="margin: auto !important; position: center" width=80%/>
     				</a>
  				</div>
    			<ul id="tokens" class="nav navbar-nav">
              		<li>
                		<p class="navbar-text"><span class="glyphicon glyphicon-record gold"></span><span class="redfont"> x </span><span class="white">{{'69'}}</span></p>
              		</li>
          		</ul>
	    		<ul id="links" class="nav navbar-nav navbar-right">
	    			<li class="active"><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
					<li><a href="{{ url('/forum') }}">FORUM</a></li>  
					<li><a href="#">HALL OF FAME</a></li>
	      			<li><a href="#">GAMES</a></li>
	      			<li><a href="{{url('videos')}}">VIDEOS</a></li>
	      			<!-- Change to user name -->
	      			<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(Auth::user()->first_name) }}
        				<span class="caret"></span></a>
       					<ul class="dropdown-menu dropdown-menu-right col-xs-12">
          					<li><a href="{{url('\profile')}}">PROFILE</a></li>
          					<li><a href="#">ADD TOKENS</a></li>
          					<li role="separator" class="divider"></li>
          					<li><a href="{{url('logout')}}">LOGOUT</a></li>
        				</ul>
      				</li>
	    		</ul>
  			</div>
		</nav>
			
		<div class="jumbotron">
			<div class="container">
				<h1 class="page-header">
					WELCOME TO<br>KOMSAI OPENHOUSE
				</h1>
				<br>
				<div class="container">
					<div class="multiple-items">
						@for($i = 1; $i < 8; $i++)
							<div class="slick-item">
								<img src="http://placehold.it/250x150">
								<p>{{ strtoupper("Content " . $i) }}</p>
							</div>
						@endfor
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
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>

  	 <script type="text/javascript">
    	$('.multiple-items').slick({
 			centerMode: true,
			centerPadding: '60px',
			slidesToShow: 3,																											
			responsive: [
			    {
			      	breakpoint: 768,
			      	settings: {
			        	arrows: false,
			        	centerMode: true,
			        	centerPadding: '40px',
			        	slidesToShow: 3
			      	}
			    },
			    {
			      	breakpoint: 480,
			      	settings: {
			        	arrows: false,
			        	centerMode: true,
			        	centerPadding: '40px',
			        	slidesToShow: 1
			      	}
			    	}
			  	],
  			dots: true
		});
    </script>
</body>
</html>