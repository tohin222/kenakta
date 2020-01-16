

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Theme Pixel</title>
  
	
	<!-- Bootstrap v4.1.3.stable -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('css/fontawesome/font-awesome.css')}}">

	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('css/icons/ionicons.css')}}">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('css/master_style.css')}}">

	<!-- ThemePixel Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{asset('css/_all-skins.css')}}">	

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">

<!-- /.login-box -->

@yield('sections')

	<!-- jQuery 3 -->
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	
	<!-- popper -->
	<script src="{{asset('js/popper.min.js')}}"></script>
	
	<!-- Bootstrap v4.1.3.stable -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	

</body>
</html>
