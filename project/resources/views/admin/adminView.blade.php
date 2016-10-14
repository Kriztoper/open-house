<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
	
    <title>KOMSAI OPENHAUS</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

  </head>
  <body>
     <!-- <h1>Admin Page</h1>
     <p><a href={{url('/adminSeries')}}>Series</a>
        <a href={{url('/adminGenre')}}>Genre</a>
 HEAD
        <a href={{url('/adminSortGenre')}}>Series Genre</a>
        <a href={{url('/adminGame')}}>Game</a>
        <a href={{url('/adminToken')}}>Token</a>
        <a href={{url('/adminGameGenre')}}>Games Genre</a>
     </p>
</body>
        <a href={{url('/adminSortGenre')}}>Sort Genre</a>
     </p> -->
    <div class="container-fluid">
		  <nav id="top-navbar" class="navbar navbar-default">
        <div class="container-fluid">
	    		<ul id="links" class="nav navbar-nav navbar-right">
	    			<li class="active"><a href="{{ url('/admin') }}">ADMIN</a></li>
	      		<li><a href="#">LOGOUT</a></li>
	      	</ul>
	      </div>
	    </nav>
    </div>
      
      <div class="container">
        <div class="row">
          <div  class="col-sm-6">
            <div class="panel panel-primary">
              <div class="panel-heading">USERS</div>
              <div class="panel-body black">Panel Content</div>
            </div>
          </div>
          <div  class="col-sm-6">
            <div class="panel panel-primary">
              <div class="panel-heading">GAMES</div>
              <div class="panel-body black">Panel Content</div>
            </div>
          </div>
        </div> 

        <div class="row">
          <div  class="col-sm-6">
            <div class="panel panel-primary">
              <div class="panel-heading">VIDEOS</div>
              <div class="panel-body black">Panel Content</div>
            </div>
          </div>
          <div  class="col-sm-6">
            <div class="panel panel-primary">
              <div class="panel-heading">TOKENS</div>
              <div class="panel-body black">Panel Content</div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>