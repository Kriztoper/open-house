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
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">

</head>
<body>

	<div class="container videos">
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
	    			<li><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
	      			<li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
	      			<li class="active"><a href="{{ url('/game') }}">GAMES</a></li>
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
			<div class="container">
				<h1 id="featured" class="page-header">
					FEATURED GAMES
				</h1>
				<br>
				<div class="container">
					<div class="single-item">
						<button type="button" class="slick-prev">Previous</button>
						<div class="slick-item"><a href="games/fourSquare/four.php"><img src="http://imgur.com/ZVzhqwU.jpg"></a></div>
						<div class="slick-item"><a href="games/Domineering/Domineering.php"><img src="http://imgur.com/GiveJFP.jpg"></a></div>
						<div class="slick-item"><a href="games/box_head_2_play/boxhead.php"><img src="http://imgur.com/mbgfGto.jpg"></a></div>
						<div class="slick-item"><a href="games/detonate2/detonate2.php"><img src="http://imgur.com/pha8HJ8.jpg"></a></div>
						<div class="slick-item"><a href="games/fireboy_watergirl2/fireboy_watergirl2.php"><img src="http://imgur.com/8lz3Zgg.jpg"></a></div>
						<div class="slick-item"><a href="games/pandemic2/pandemic2.php"><img src="http://imgur.com/bv9I182.jpg"></a></div>
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
			    		<a href="games/box_head_2_play/boxhead.php">
			      		<img src="http://imgur.com/GXbhBcM.jpg" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>BOXHEAD</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/detonate2/detonate2.php">
			      		<img src="http://imgur.com/sqkwOal.jpg" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>DETONATE 2</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/animeFightingJam.png" alt="...">
			      		<div class="caption">
			        		<h3>Anime Fighting Jam</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/combatTournament.png" alt="...">
			      		<div class="caption">
			        		<h3>Combat Tournament Legends</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/gunMayhem.png" alt="...">
			      		<div class="caption">
			        		<h3>Gun Mayhem</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/gunBlood.jpg" alt="...">
			      		<div class="caption">
			        		<h3>Gun Blood</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>
			</div>

			<h2 class="page-header class">ADVENTURE</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/fireboy_watergirl2/fireboy_watergirl2.php">
			      		<img src="http://imgur.com/OvnIHAO.jpg" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>FIREBOY & WATERGIRL 2</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/pandemic2/pandemic2.php">
			      		<img src="http://imgur.com/0JXlcQM.jpg" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>PANDEMIC 2</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/learnToFly.png" alt="...">
			      		<div class="caption">
			        		<h3>Learn To Fly</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/shootTheApple.png" alt="...">
			      		<div class="caption">
			        		<h3>Shoot The Apple</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/250x250" alt="...">
			      		<div class="caption">
			        		<h3>Thumbnail label</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			      		<img src="/images/Games/PlayingWithFire2.png" alt="...">
			      		<div class="caption">
			        		<h3>Playing with Fire 2</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>
			</div>

			<h2 class="page-header class">BOARD GAMES</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/fourSquare/four.php">
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
			    		<a href="games/Domineering/Domineering.php">
			      		<img src="http://imgur.com/OUbMZpd.jpg" alt="Domineering">
			      		</a>
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
			    		<a href="games/ChainReaction/ChainReaction.php">
			      		<img src="/images/Games/chainReaction.jpg" alt="Chain Reaction">
			      		<div class="caption">
			        		<h3>Chain Reaction</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/DotsTrix/DotsTrix.php">
			      		<img src="http://i.imgur.com/jfNDKUy.jpg" alt="DotsTrix">
			      		<div class="caption">
			        		<h3>DotsTrix</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="game/CoralizeQuest/CoralineQuest.php">
			      			<img src="http://i.imgur.com/ihzdHIi.png" alt="Coraline Quest">
			      		</a>
			      		<div class="caption">
			        		<h3>Coraline Quest</h3>
			        		<p></p>
			      		</div>
			    	</div>
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