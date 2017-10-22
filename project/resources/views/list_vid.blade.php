<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/list_vid.css')}}">
</head>
<body>

	<div class="container-fluid">
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
					<li><a href="{{ url('/forum') }}">FORUM</a></li>  
					<li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
	      			<li><a href="{{ url('/game') }}">GAMES</a></li>
	      			<li><a href="{{ url('/videos') }}">VIDEOS</a></li>
	      			<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" role="button">{{ strtoupper(Auth::user()->first_name) }}
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
			
		<div class="jumbotron transparent">
			<div class="container">
				<h1 class="page-header">WATCH ANIME</h1><br>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="pic col-md-4" style=><img src="{{url('images/Poster/'.$series->fthumbnail.'.jpg')}}" alt="OpenHouse" style="height:100%; width:110%; margin-left:-15px;"></div>
						<div class="col-md-6">
							<div class="name">{{$series->seriesName}}</div>
							<div class="desc">{{$series->seriesDesc}}</div>
						</div>
					</div>
					<div class="panel-body">
						<h2 class="eps-head">LIST OF EPISODES</h2>
						<ul class="eps">
							@foreach ($videos as $index=>$video)
							<li><a class="{{$userVideo[$index++]}}" href="{{url('/buyVid/'.$video->videoID)}}">{{$video->videoName}}</a></li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-fixed-bottom">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right navbar-xs">
					<li><a href="#">ABOUT THE DEVELOPERS</a></li>
				</ul>
			</div>
		</nav>
		
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
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
		$(function() {
    		$('.confirm').click(function() {
        	return window.confirm("Buy this video for 5 Tokens?");
    	});
		});
    </script>

</body>
</html>