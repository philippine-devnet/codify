<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title spa-id='title'>{{ isset($title) ? $title : "Codify PH | Beta" }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<title spa-id='document-title'>{{ isset($title) ? $title : "Codify PH | Beta Test" }}</title>

		<link rel="stylesheet" type="text/css" href="{{ URL::to('boilerplate') }}/css/bootstrap.css">
		 <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
		<link rel="stylesheet" href="{{ URL::to('boilerplate') }}/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="{{ URL::to('boilerplate') }}/css/main.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css') }}/style.css">
		 <script src="{{ URL::to('boilerplate') }}/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
        @include('home.backbone.tpls')
	</head>