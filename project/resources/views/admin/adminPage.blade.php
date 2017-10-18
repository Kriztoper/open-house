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
     <h1>Admin Page</h1>
     <p><a href={{url('/adminSeries')}}>Series</a>
        <a href={{url('/adminGenre')}}>Genre</a>
        <a href={{url('/adminSortGenre')}}>Series Genre</a>
        <a href={{url('/adminGame')}}>Game</a>
        <a href={{url('/adminToken')}}>Token</a>
        <a href={{url('/adminGameGenre')}}>Games Genre</a>
        <a href={{url('/listToken')}}>TOKEN LIST</a>
     </p>
</body>
</html>