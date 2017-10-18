<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css"> -->

</head>
<body>
          <table class="log">
            <tbody>
                <tr>
                    <th>Token Name</th>
                    <th>Token Value</th>
                </tr>
                @foreach ($list as $token)
                    @if($token->isActive!=0)
                      <tr>
                        <td>{{$token->tokenName}}</td>
                        <td>{{$token->tokenValue}}</td>
                      </tr>
                    @endif
                @endforeach
            </tbody>  
          </table><!--
        <form role="form" method="POST" action="{{url('/testChat')}}">
            <input type="hidden" name="getME" value="4"/>
            <button type="submit">Please Click</button>
        </form>-->
</body>
    <script>
    </script>
</html>