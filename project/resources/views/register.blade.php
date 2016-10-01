<!DOCTYPE html>
<html>
    <head>
        <title>Student Scheduler</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

            .Absolute-Center {
              margin: auto;
              position: absolute;
              top: 0; left: 0; bottom: 0; right: 0;
            }

            .Absolute-Center.is-Responsive {
              width: 100%; 
              height: 100%;
              min-width: 200px;
              max-width: 400px;
              padding: 40px;
            }

            #logo-container{
              margin: auto;
              margin-bottom: 10px;
              width:164px;
              height:165px;
              background-image:url('http://upvtc.edu.ph/wp-content/uploads/2016/07/footer1.png');
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div id="logo-container"></div>
            <div class="row">
                <div class="Absolute-Center is-Responsive">
                    <div class="panel panel-info">  
                      <div class="panel-heading"> Registration </div>
                      <div class="panel-body">
                          
                        {!! form_start($form) !!}
                        {!! form_row($form->first_name) !!}
                        {!! form_row($form->last_name) !!}
                        {!! form_row($form->student_number) !!}
                        {!! form_row($form->password) !!}
                        {!! form_row($form->register) !!}

                        <a href="/openhouse/project/public/register/done" class="btn btn-success btn-block" role="button"> Register </a>
                      </div>
                    </div>

                </div>    
            </div>
        </div>
    </body>
</html>
