<!DOCTYPE html>
<html>
<head>
	<title>Videos</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/videos.css">
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
                		<p class="navbar-text"><span class="glyphicon glyphicon-record gold"></span><span class="redfont"> x </span><span class="white">{{Auth::user()->token}}</span></p>
              		</li>
          		</ul>
	    		<ul id="links" class="nav navbar-nav navbar-right">
	    			<li><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
	      			<li><a href="#">HALL OF FAME</a></li>
	      			<li><a href="#">GAMES</a></li>
	      			<li class="active"><a href="#">VIDEOS</a></li>
	      			<!-- Change to user name -->
	      			<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(Auth::user()->first_name) }}
        				<span class="caret"></span></a>
       					<ul class="dropdown-menu dropdown-menu-left col-xs-12">
          					<li><a href="{{url('\profile')}}">PROFILE</a></li>
          					<li><a href="#">ADD TOKENS</a></li>
          					<li role="separator" class="divider"></li>
          					<li><a href="{{url('logout')}}">LOGOUT</a></li>
        				</ul>
      				</li>
	    		</ul>
  			</div>
		</nav>

		

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
</body>
</html>