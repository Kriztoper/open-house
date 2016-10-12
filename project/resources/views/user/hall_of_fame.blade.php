<!DOCTYPE html>
<html>
    <head>
        <title>Hall Of Fame</title>
       	<meta charset="utf-8">
  		  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/hall_of_fame.css" type="text/css">
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
              <li class="active"><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
              <li><a href="{{ url('/game') }}">GAMES</a></li>
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

		<nav class="navbar navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>
    </div>

    <div class="container tablePos col-lg-7">
      <table class="table table-hover">
        <thead>
          <tr class="gold gob">
            <th><font size="5"><STRONG> GAME 
              <img src="http://i.imgur.com/bwLy1gt.gif" width="50" height="40">
              <img src="http://i.imgur.com/2iQcN1i.gif" width="50" height="40">
              <img src="http://i.imgur.com/rHYMNr2.gif" width="50" height="40">
              <img src="http://i.imgur.com/10XxdHk.gif" width="50" height="40"></STRONG></font></th>
            <th><font size="5"><STRONG> CHAMPION <img src="http://i.imgur.com/qa1QYrs.gif"  width="50" height="40"></STRONG></font></th>
          </tr>
        </thead>
        <tbody class="gold">
          <tr>
            <td><font size="3"> Basketball </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> Volleyball </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> Football </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> Ultimate Frisbee </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> Paraptayay </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> Futsal </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
          <tr>
            <td><font size="3"> DOTA 2 </font></td>
            <td><font size="3"> Sinugdanan </font><img src="http://i.imgur.com/ANQHzFM.gif" width="50" height="40"></td>
          </tr>
        </tbody>
      </table>
    </div>
    		
    		
    </body>
</html>