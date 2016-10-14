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
<<<<<<< HEAD
						<div class="slick-item"><a href="games/fourSquare/four.php"><img src="{{url("/images/games/featured/fourSquare.jpg")}}"></a></div>
						<div class="slick-item"><a href="games/Domineering/Domineering.php"><img src="{{url("/images/games/featured/domineering.jpg")}}"></a></div>
						<div class="slick-item"><a href="games/ChainReaction/ChainReaction.php"><img src="{{url("/images/games/featured/chainReaction.png")}}"></a></div>
						<div class="slick-item"><a href="games/Mancala/Mancala.php"><img src="{{url("/images/games/featured/mancala.png")}}"></a></div>
						<div class="slick-item"><a href="games/DotsTrix/DotsTrix.php"><img src="{{url("/images/games/featured/DotsTrix.png")}}"></a></div>
						<div class="slick-item"><a href="games/KillerCubes/killerCubes.php"><img src="{{url("/images/games/featured/killerCubes.png")}}"></a></div>
						<div class="slick-item"><a href="games/CoralineQuest/CoralineQuest.php"><img src="{{url("/images/games/featured/coralineQuest.png")}}"></a></div>
=======
						<div class="slick-item"><a href="games/fourSquare/four.php"><img src="/images/Featured Games/Feature1.jpg"></a></div>
						<div class="slick-item"><a href="games/Domineering/Domineering.php"><img src="/images/Featured Games/domineering.png"></a></div>
						<div class="slick-item"><a href=""><img src="/images/Featured Games/CoralineQuest.png"></a></div>
						<div class="slick-item"><a href=""><img src="/images/Featured Games/mancala.png"></a></div>
						<div class="slick-item"><a href=""><img src="/images/Featured Games/chainReaction.png"></a></div>
						<div class="slick-item"><a href=""><img src="/images/Featured Games/DotsTrix.png"></a></div>
						<div class="slick-item"><img src="/images/Featured Games/killerCubes.png"></div>
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
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
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/boxHead.png")}}" alt="...">
=======
			      		<img src="images/Games/boxHead.png" alt="boxhead">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		</a>
			      		<div class="caption">
			        		<h3>BOXHEAD</h3>
			        		</br>
			        		</br>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/detonate2/detonate2.php">
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/detonate2.png")}}" alt="...">
=======
			      		<img src="images/Games/detonateII.png" alt="...">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		</a>
			      		<div class="caption">
			        		<h3>DETONATE2</h3>
			        		</br>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/anime_fighting_jam_wing/anime_fighting_jam_wing.php">
			      		<img src="{{url("/images/games/thumbnail/animeFightingJam.png")}}" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>Anime Fighting Jam</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/anime_fighting_jam_wing/anime_fighting_jam_wing.php">
			      		<img src="{{url("/images/games/thumbnail/combatTournament.png")}}" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>Combat Tournament Legends</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/gun_mayhem/gun_mayhem.php">
			      		<img src="{{url("/images/games/thumbnail/gunMayhem.png")}}" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>Gun Mayhem</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/political_duel/political_duel.php">
			      		<img src="{{url("/images/games/thumbnail/politicalDuel.png")}}" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>Political Duels</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>
			</div>

			<h2 class="page-header class">STRATEGIC GAMES</h2>
			<div class="row">
			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/fireboy_watergirl2/fireboy_watergirl2.php">
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/fireboyWatergirl2.jpg")}}" alt="...">
=======
<<<<<<< HEAD
			      		<img src="/images/Games/lightTemple.jpg" alt="...">
=======
			      		<img src="http://imgur.com/OvnIHAO.jpg" alt="...">
>>>>>>> 6c94bbc607ab97dda97b881dc14015e4790bdbf5
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
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
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/pandemic2.png")}}" alt="...">
=======
			      		<img src="/images/Games/pandemicII.png" alt="...">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		</a>
			      		<div class="caption">
			        		<h3>PANDEMIC 2</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/learntofly/learn_to_fly.php">
			      		<img src="{{url("/images/games/thumbnail/learnTofly.png")}}" alt="...">
			      		</a>
			      		<div class="caption">
			        		<h3>Learn To Fly</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/shoot_the_apple/shoot_the_apple.php">
			      		<img src="{{url("/images/games/thumbnail/shootTheApple.png")}}" alt="...">
			      		</a>
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
			    		<a href="games/playing_with_fire_2/playing_with_fire_2.php">
			      		<img src="{{url("/images/games/thumbnail/playingWithFire2.png")}}" alt="...">
			      		</a>
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
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/4square.jpg")}}" alt="4 Squares">
=======
			      			<img src="/images/Games/4square.jpg" alt="4 Squares">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
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
<<<<<<< HEAD
			      		<img src="{{url("/images/games/thumbnail/domineering.jpg")}}" alt="Domineering">
=======
			      		<img src="/images/Games/domineering.jpg" alt="Domineering">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		</a>
			      		<div class="caption">
			        		<h3>Domineering</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
<<<<<<< HEAD
			    		<a href="games/Mancala/Mancala.php">
			      		<img src="http://imgur.com/tDXAs0H.jpg" alt="Sungka">
			      		</a>
=======
			      		<img src="/images/Games/mancala.png" alt="Mancala">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		<div class="caption">
			        		<h3>Mancala</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/ChainReaction/ChainReaction.php">
			      		<img src="{{url("/images/games/thumbnail/chainReaction.jpg")}}" alt="Chain Reaction">
			      		</a>
			      		<div class="caption">
			        		<h3>Chain Reaction</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
			    		<a href="games/DotsTrix/DotsTrix.php">
<<<<<<< HEAD
			      		<img src="http://i.imgur.com/jfNDKUy.jpg" alt="DotsTrix">
			      		</a>
=======
			      		<img src="/images/Games/dotsTrix.jpg" alt="DotsTrix">
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
			      		<div class="caption">
			        		<h3>DotsTrix</h3>
			        		<p></p>
			      		</div>
			    	</div>
			  	</div>

			  	<div class="col-md-2">
			    	<div class="thumbnail">
<<<<<<< HEAD
			    		<a href="games/CoralineQuest/CoralineQuest.php">
			      		<img src="{{url("/images/games/thumbnail/coraline.png")}}" alt="Coraline Quest">
			      		</a>	
=======
			    		<a href="game/CoralizeQuest/CoralineQuest.php">
<<<<<<< HEAD
			      		<img src="/images/Games/coraline.png" alt="Coraline Quest">
=======
			      			<img src="http://i.imgur.com/ihzdHIi.png" alt="Coraline Quest">
			      		</a>
>>>>>>> 6c94bbc607ab97dda97b881dc14015e4790bdbf5
>>>>>>> 5e8302df3f5f971f8b01a752ed51f8d17351df35
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