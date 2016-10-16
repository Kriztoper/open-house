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
          <!-- <div class="panel panel-info">   -->
            <!-- <div class="panel-heading"> Registration </div> -->
            <!-- <div class="panel-body"> -->
                
              {!! form_start($form) !!}
              {!! form_row($form->first_name) !!}
              {!! form_row($form->last_name) !!}
              {!! form_row($form->student_number) !!}
              {!! form_row($form->password) !!}
              {!! form_row($form->register) !!}
              <!-- <a href="/openhouse/project/public/register/done" class="btn btn-success btn-block" role="button"> Register </a> -->
            <!-- </div> -->
          <!-- </div> -->
        </div>    
      </div>
    </div>
  </body>
</html>
