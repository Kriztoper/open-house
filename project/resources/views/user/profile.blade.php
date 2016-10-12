<!DOCTYPE html>
<html>
    <head>
      <title>Student Profile</title>
      <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		  <link rel="stylesheet" href="css/profile.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/modal.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     	
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
	    			  <li><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
              <li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
              <li><a href="{{ url('/game') }}">GAMES</a></li>
              <li><a href="{{ url('/videos') }}">VIDEOS</a></li>
              <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(Auth::user()->first_name) }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-left col-xs-12">
                    <li><a href="{{url('\profile')}}">PROFILE</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{url('logout')}}">LOGOUT</a></li>
                </ul>
              </li>
	    		</ul>
  			</div>
		</nav>

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
    		
    		<div class="profBody">
    			<div class="panel panel-info trans">
    				<div class="panel-heading">
    					<h1 class="panel-title gobold blue">User Profile</h1>
    				</div>
    				<div class="panel panel-body trans">
    					<div class="col-lg-3">
    						<img src="http://i.imgur.com/IvLy13w.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
    					</div>
    					<div class="col-lg-9">
    						<table class="table table-user-information cyan">
    							<tbody >
    								<tr>
    									<td class="white gobolds">First Name:</td>
    									<td class="gobolds">{{ Auth::user()->first_name }}</td>
    								</tr>
    								<tr>
    									<td class="white gobolds">Last Name:</td>
    									<td class="gobolds">{{ Auth::user()->last_name }}</td>
    								</tr>
    								<tr>
    									<td class="white gobolds">Student Number:</td>
    									<td class="gobolds">{{ Auth::user()->student_number }}</td>
    								</tr>
    							</tbody>
    						</table>
    						
    					</div>
    				</div>
    				<div class="panel panel-footer trans col-lg-12">
    					<div class="pull-right">
    					<a href="#" class="btn btn-primary goldbg gobolds blue">Edit Profile</a>
    					<a href="#" class="btn btn-primary redbg gobolds blue">Change Password</a>
    				</div>
    				</div>
  				</div>
  			</div>


  			<div class="logo">
  				<img src="http://i.imgur.com/i4LQ5Bi.png" alt="Cinque Terre" width="300" height="150">
  			</div>

  			<div class="pac p">
  				<img src="http://i.imgur.com/7stkOu8.gif" alt="Cinque Terre" width="55" height="40">
  			</div>
  			<!-- ghost dapat an gif pero wa pa source-->
  			<div class="ghost">
  				<img src="http://i.imgur.com/uBUEscJ.gif" width="400" height="35">
  			</div>

    	</div>
    </body>
</html>