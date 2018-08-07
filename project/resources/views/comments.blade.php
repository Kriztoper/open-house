<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>Comments</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/content.css">
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/modal.css">
  <link rel="stylesheet" href="/css/comments.css" type="text/css">
  

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
        			<a class="dropdown-toggle" data-toggle="dropdown" role="button"> {{ strtoupper(Auth::user()->first_name) }}
        			<span class="caret"></span></a>
       				<ul class="dropdown-menu dropdown-menu-right">
          				<li class="pull-right"><a href="{{url('/profile')}}">PROFILE</a></li>
          				<li class="pull-right"><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
          				<li class="pull-right"><a href="{{url('/logout')}}">LOGOUT</a></li>
        			</ul>
      			</li>
	   		</ul>
  		</div>
	</nav>



  <div class="container" id="comments-cntnr">
    @include('partials.comments_partial')
  </div>


		<br>
		<br>
		<br>
		<br>
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
					<center>
						<img id="token-error" src="http://vignette4.wikia.nocookie.net/scream-queens/images/1/15/Error-sadface-f0f0f0.png/revision/latest?cb=20160627204354" />
						<h1 class="modal-title"><strong>Error</strong></h1>
						<h5 class="modal-title">Not enough tokens to buy this game</h5>
					</center>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right navbar-xs">
          <li><a href="{{url('/developers')}}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>

   	<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="/slick/slick.min.js"></script>

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

	<?php $error = Session::get('error'); ?>
	@if($error != null && count($error)>0 && Session::get('error') == 401)
	<script>
	$(function()
		{
			$('#lackOfTokenModal').modal({show:true});
	});
	</script>
	@endif

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script>
		var vm = new Vue({
      el: "#comments-cntnr",
      data: {
        comments: {!! json_encode($commentsList) !!},
      },
      methods: {

      },
      computed: {
        computedComments: function() {
					return this.comments;
				},
      }
    });

		// comments auto-update
		var forum = {!! json_encode($forum[0]) !!};
    setInterval(function() {
      $.ajax({
        url: "/api/comments/" + forum.id,
      }).done(function( data ) {
				if (vm.comments.length !== data.commentsList.length) {
          vm.comments = data.commentsList;
        }
      });
    }, 10000);
  </script>
</body>
</html>