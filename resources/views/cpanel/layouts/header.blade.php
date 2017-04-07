<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>
	    @if(!empty($title)) {{$title}} @endif
	</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
<link href="{{ secure_asset('public/cpanel/css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!-- Animation library for notifications   -->
    <link href="{{ secure_asset('public/cpanel/css/animate.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ secure_asset('public/cpanel/css/paper-dashboard.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ secure_asset('public/cpanel/css/demo.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ secure_asset('public/cpanel/css/themify-icons.css') }}" media="all" rel="stylesheet" type="text/css" />

@yield('css')
</head>
<body>
<div class="wrapper">
