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
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

</head>
<body>
     <div class="log">
          <img id="logo" src="http://i.imgur.com/i4LQ5Bi.png" />
      </div>
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <form class="form-horizontal" role="form" method="POST" action="{{url('/adminGame')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" name="gameName" placeholder="Game Name" value="{{ old('gameName') }}">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" name="gameDesc" placeholder="Game Description" value="{{ old('gameDesc') }}">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" name="thumbnail" placeholder="Image Name" value="{{ old('thumbnail') }}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" name="fthumbnail" placeholder="Image Name 950" value="{{ old('fthumbnail') }}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control" name="className" placeholder="Class for jar(jar files only)" value="{{ old('className') }}">
              </div>
            </div>


            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" id="reg" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>
          </form> 
        </div>    
      </div>
</body>
</html>