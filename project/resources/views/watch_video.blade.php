<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	    			<li ><a href="{{url('dashboard')}}">DASHBOARD</a></li>
	      			<li><a href="{{url('hall_of_fame')}}">HALL OF FAME</a></li>
	      			<li><a href="{{url('games')}}">GAMES</a></li>
	      			<li class="active"><a href="#">VIDEOS</a></li>
                    <li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" role="button">{{ strtoupper(Auth::user()->first_name) }}
        				<span class="caret"></span></a>
       					<ul class="dropdown-menu dropdown-menu-right col-xs-12">
          					<li><a href="{{url('\profile')}}">PROFILE</a></li>
          					<li><a href="{{url('add_token')}}">ADD TOKENS</a></li>
          					<li><a href="{{url('logout')}}">LOGOUT</a></li>
        				</ul>
      				</li>
	    		</ul>
                
  			</div>
            
		</nav>
        
		<div class="jumbotron">
			<div class="container-fluid">
            <center>
                <video height="400" width="400" controls>
                <source src="{{url('/'.$videos->videoURL)}}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <h4>{{"".$videos->videoName}}</h4>
            </center>
			</div>
		</div>
        
		<nav class="navbar navbar-fixed-bottom">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{url('help')}}">Help</a></li>
					<li><a href="{{url('about')}}">ABOUT THE DEVELOPERS</a></li>
				</ul>
			</div>
		</nav>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>