<!DOCTYPE html>
<html>
  <head>
    <title>Open House 2016</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body{
        background-image: url("http://i.imgur.com/MJVPjaV.jpg");
        color: white;
      }

      div.well{
        height: 250px;
      } 

      .responsive-center{
        margin-top: 30px;
        width: 23%;
      }

      .btn{
          margin-bottom: 15px;
      }

      #logo{
        margin-top: 3%;
      }

      #log{
        background: #FF8226;
      }

      #reg{
        background: #BA002C;
      }
    </style>
  </head>
  <body>
    <center><div class="container-fluid">
    <img id="logo" src="http://i.imgur.com/i4LQ5Bi.png" />
    <div class="responsive-center">
      <form action="" id="loginForm">
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input class="form-control" type="text" name='username' placeholder="student number"/>
        </div>
        
        <div class="form-group input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input class="form-control" type="password" name='password' placeholder="password"/>     
        </div>

        <div class="text-center container-fluid">
          <div class="row">
            <a href="#" id="log" class="btn btn-primary btn-block" role="button">Login</a>
          </div>
          <div class="row">
            <a href="/openhouse/project/public/register" id="reg" class="btn btn-success btn-block" role="button">Register</a>
          </div>
          <div class="row">
            <a href="#">Forgot Password</a> 
          </div>
        </div>
      </form>        
    </div>
  </div></center>
</body>
</html>
