<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
	@include('client.components.css')
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('Eshopper/')}}/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('Eshopper/')}}/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('Eshopper/')}}/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('Eshopper/')}}/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('Eshopper/')}}/images/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	@include('client.components.header')
	
	<div class="">
		@yield('content')
	</div>
	
	@include('client.components.footer')
	@include('client.components.js')
</body>
</html>