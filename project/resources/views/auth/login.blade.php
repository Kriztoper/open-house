<!DOCTYPE html>
<html>
  <head>
    <title>Open House 2016</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center><div class="container-fluid">
      <img id="logo" src="http://i.imgur.com/i4LQ5Bi.png" />
      <div class="responsive-center">
        <!-- <form action="" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='username' placeholder="Student Number"/>
          </div>
        
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="Password"/>     
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
        </form>  -->
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form class="form-horizontal" role="form" method="POST" action="/openhouse/project/public/auth/login">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-4 control-label">Student Number</label>
<div class="col-md-6">
<input type="number" class="form-control" name="student_number" value="{{ old('student_number') }}">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password">
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<div class="checkbox">
<label>
<input type="checkbox" name="remember"> Remember Me
</label>
</div>
</div>
</div>

<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
  <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
    Login
  </button>

<a href="/password/email">Forgot Your Password?</a>
      </div>
    </div></center>
    <img id="btm" src="http://i.imgur.com/pMAtGEl.png"/>
  </body>
</html>