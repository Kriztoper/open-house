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
              <form class="form-horizontal" role="form" method="POST" action="/openhouse/project/public/auth/register">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Last Name</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="last_name" value="{{ old('first_name') }}">
                </div>
              </div>

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
                <label class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="password_confirmation">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                  Register
                  </button>
                </div>
              </div>
           </form> 
        </div>    
      </div>
    </div>
  </body>
</html>
