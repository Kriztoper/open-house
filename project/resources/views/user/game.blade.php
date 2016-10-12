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
    <link rel="stylesheet" type="text/css" href="css/videos.css">

</head>
<body>

	<div class="container-fluid videos">
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
	    			<li><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
	      			<li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
	      			<li class="active"><a href="{{ url('/game') }}">GAMES</a></li>
	      			<li><a href="{{ url('/videos') }}">VIDEOS</a></li>
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

		<div class="jumbotron">
			<div class="container">
				<h1 class="page-header">
					FEATURED GAMES
				</h1>
				<br>
				<div class="container">
					<div class="single-item">
						<div class="slick-item"><a href="games/four.php"><img src="http://imgur.com/ZVzhqwU.jpg"></a></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
						<div class="slick-item"><img src="http://placehold.it/950x250"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="jumbotron">
			<h2 class="page-header class">ACTION</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>
			</div>

			<h2 class="page-header class">ADVENTURE</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>
			</div>

			<h2 class="page-header class">BOARD GAMES</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/four.php">
			      			<img src="http://imgur.com/W7wpm5G.jpg" alt="4 Squares">
			      		</a>
			      		<div class="caption">
			        		<h3>4 Squares</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://imgur.com/OUbMZpd.jpg" alt="Domineering">
			      		<div class="caption">
			        		<h3>Domineering</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://imgur.com/tDXAs0H.jpg" alt="Sungka">
			      		<div class="caption">
			        		<h3>Sungka</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p>...</p>
			      		</div>
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
    	$('.single-item').slick({
    		dots: true
    	});
    </script>
</body>
</html>