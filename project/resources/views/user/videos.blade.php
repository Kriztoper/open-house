<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>Videos</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="/css/modal.css" type="text/css">

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

		<div class="container-fluid videos">
			<div class="container">
				<h1 id="featured" class="page-header">FEATURED VIDEOS</h1>
				<div class="single-item">
					@foreach($featuredContent as $featured)
                        <div class="slick-item">
                        	<a href="{{url('/list_video/'.$featured->seriesID)}}">
                        		<img src="{{url("/images/Poster/".$featured->fthumbnail.".jpg")}}">
                        	</a>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>

		<div class="container-fluid more-content">
			<div class="container">
				<h2 class="page-header headers">ANIME</h2>
				<div class="row">
			  		@foreach($anime as $animeVids)
			  			<div class="col-md-2">
			  				<a href="{{url('/list_video/'.$animeVids->seriesID)}}">
			    				<div class="thumbnail">
			      					<img src="{{url("/images/Poster/".$animeVids->thumbnail.".jpg")}}" alt="...">
			      					<div class="caption">
			      						
			        					<!--<h3>{{$animeVids->seriesName}}</h3>-->
			        					
			        					<!--<p>{{$animeVids->seriesDesc}}</p>-->
			      					</div>
			    				</div>
			    			</a>
			  	   		</div>
			  		@endforeach
				</div>
				<h2 class="page-header class">K-DRAMA</h2>
				<div class="row">
					@foreach($kDrama as $korean)
			  			<div class="col-md-2">
			  				<a href="{{url('/list_video/'.$korean->seriesID)}}".>
			    				<div class="thumbnail">
			      					<img src="{{url("/images/Poster/".$korean->thumbnail.".jpg")}}" alt="...">
			      					<div class="caption">
			      						<center>
			        					<h3>{{$korean->seriesName}}</h3>
			        					</center>
			        					<!--<p>{{$korean->seriesDesc}}</p>-->
			      					</div>
			    				</div>
			    			</a>
			  	   		</div>
			  		@endforeach
				</div>
			</div>
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
		
		<!-- Modal lack of tokens -->
		<div id="lackOfTokenModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<img id="modal-logo" src="http://i.imgur.com/i4LQ5Bi.png" />
						<img src="http://i.imgur.com/2ggNleD.jpg" />
						<h4 class="modal-title"><strong>KOMSAI OPENHOUSE ERROR 401!</strong></h4>
					</div>
					<div class="modal-body">
	            		<center><h4> Not enough tokens to buy this game </h4></center>
	            		<center><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Get Tokens!!</button></center>
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
    <?php $error = Session::get('error'); ?>
	@if($error != null && count($error)>0 && Session::get('error') == 400)
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