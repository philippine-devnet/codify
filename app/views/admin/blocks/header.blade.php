<!-- start: Meta -->
	    <meta charset="utf-8">
	    <title>{{ $title }}</title>
   		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- end: Meta -->

    	<!-- start: CSS -->
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/bootstrap/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/bootstrap/css/bootstrap-responsive.css">   
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/font-awesome/font-awesome.html">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/fullcalendar/fullcalendar.css">
	    <link rel="stylesheet" type="text/css" href='{{ URL::to('admin') }}/assets/lib/fullcalendar/fullcalendar.print.css' media='print'>
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-fileupload.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/pnotify/jquery.pnotify.default.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/pnotify/jquery.pnotify.default.icons.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/todo/css/base.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/lib/todo/css/app.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/icheckcss.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/masonry.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/wizard.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/bootstrap-wysihtml5.css" >
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/jquery.spellchecker.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/slider.css">
	    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin') }}/assets/css/style.css">
	    <!-- end: CSS -->

	    <!-- start: JS -->
	    <script src="{{ URL::to('admin') }}/assets/js/jquery-1.9.1.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/lib/bootstrap/js/bootstrap.js"></script>
	  
	    <script src='{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-fileupload.js'></script>
	    <script src='{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-inputmask.js'></script>
	    <script src='{{ URL::to('admin') }}/assets/lib/jasny/bootstrap-typeahead.js'></script>   
	   
	    <script src="{{ URL::to('admin') }}/assets/js/bootstrap-slider.js"></script>
	  
	    <script src="{{ URL::to('admin') }}/assets/js/charts.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/date.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/daterangepicker.js"></script>   
	    
	    <script src="{{ URL::to('admin') }}/assets/js/wizard.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/wysihtml5-0.3.0.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/bootstrap-wysihtml5.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/prettyprint.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.spellchecker.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/parsley.js"></script>
	    <script src="{{ URL::to('admin') }}/assets/js/jquery.masonry.min.js"></script>
	   
	    @include('backbone')
	    <script src="{{ URL::to('admin') }}/assets/js/app.js"></script>
	    <!-- end: JS -->
	    
	    <!-- Le fav and touch icons -->
	    
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('admin') }}/assets/ico/apple-touch-icon-144-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('admin') }}/assets/ico/apple-touch-icon-114-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('admin') }}/assets/ico/apple-touch-icon-72-precomposed.html">
	    <link rel="apple-touch-icon-precomposed" href="{{ URL::to('admin') }}/assets/ico/apple-touch-icon-57-precomposed.html">
	    
	    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
	    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
	    <!--[if IE 8 ]> <body class="ie ie8 "> 
	    <style type="text/css">
	    	.navbar form.search input,.sidebar-nav form.search input,.sidebar-label,.thumb-account{border: none;}
	    	.thumb-account span {width: 2px;}
	    	.sidebar-nav .form-inline { display: none;}
	    </style>
	    <![endif]-->

	    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->

	    <!--[if gte IE 9]>
	     <style type="text/css">.gradient {filter: none;}</style>
	    <![endif]-->