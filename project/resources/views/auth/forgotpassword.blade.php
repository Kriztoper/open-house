<!DOCTYPE html>
<html>
  <head>
    <title>Student Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="log">
          <img id="logo" src="http://i.imgur.com/i4LQ5Bi.png" />
      </div>
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/save_forgot_pass') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <div class="col-md-12">
                <input type="number" class="form-control" name="student_number" placeholder="Student Number" value="{{ old('student_number') }}">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <div>
                  <button type="submit" id="reg" class="btn btn-primary btn-block">Save New Password</button>
                </div>
                <div>
                  <a id="back" class="btn btn-success btn-block" href="{{ url('/login') }}">Back to Login</a>
                </div>
              </div>
            </div>
          </form> 
        </div>    
      </div>
    </div>
  </body>
</html>
