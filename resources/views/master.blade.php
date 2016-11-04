<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>ARM | @yield('title')</title>
		<link rel="stylesheet" href="{{asset('assets/styles/bootstrap/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/styles/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/styles/responsify.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:200" rel="stylesheet">
  </head>
  <body>
    @yield('content')
  </body>
  <script type="text/javascript" src="{{asset('assets/scripts/jquery/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/scripts/bootstrap.min.js')}}"></script>   
  <script type="text/javascript" src="{{asset('assets/scripts/index.js')}}"></script>
</html>