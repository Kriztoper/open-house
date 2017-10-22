<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/content.css">
    <link rel="stylesheet" type="text/css" href="../css/gamenavbar.css">
    <link rel="stylesheet" type="text/css" href="../css/modal.css">

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
	    			<li class="active"><a href="{{ url('/exitGame') }}">BACK</a></li>
	    		</ul>
  			</div>
		</nav>
		@if ($game->isJar!=1)
			<div id="middle" align="center">
				<object>
            	<param name="game" value="{{url(''.$game->gameURL)}}">
            	<embed src="{{ url(''.$game->gameURL) }}" width="{{$game->width}}" height="{{$game->height}}">
        		</object>
			</div>		
		@elseif	($game->isJar==1)	
			<div id="middle" style="width=565px;margin:0 auto;">
	   			<object type="application/x-java-applet" src="{{url(''.$game->gameURL)}}" width = "{{$game->width}}" height="{{$game->height}}">
					<param name="archive" value="{{url(''.$game->gameURL)}}" />
					Applet failed to run.  No Java plug-in was found.
	   			</object>
	   		</div> 
		@endif
	<!-- Modal for token -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content bg2">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">KOMSAI OPENHOUSE TOKEN GENERATOR</h4>
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


    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
</body>
</html>