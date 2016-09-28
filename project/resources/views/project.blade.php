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
              background: #00589F;
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00589F', endColorstr='#0073CF', GradientType=0);
              background: -webkit-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
              background: -moz-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
              background: -ms-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
              background: -o-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
              background: linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
              color: white;
            }

            div.well{
              height: 250px;
            } 

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

            .btn{
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="Absolute-Center is-Responsive">
                    <div id="logo-container">
                        
                    </div>
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
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
                                    <a href="#" class="btn btn-primary btn-block" role="button">Login</a>
                                </div>
                                <div class="row">
                                    <a href="/laravel/public/register" class="btn btn-success btn-block" role="button">Register</a>
                                </div>
                                <div class="row">
                                    <a href="#">Forgot Password</a> |
                                    <a href="#">Support</a>
                                </div>

                            </div>
                        </form>        
                    </div>  
                </div>    
            </div>
        </div>
    </body>
</html>
