<!DOCTYPE html>
<html lang="en">
	
<head>
    	<title>Codify PH | Deploying Soon</title>
    	<meta charset="UTF-8">
    	<!-- Bootstrap --><link href="assets/css/bootstrap.min.css" rel="stylesheet">
    	<link href="assets/css/style.css" rel="stylesheet">
    	<meta type="title" content="Codify PH | Deploying Soon" />
    	<meta property="og:title" content="Codify PH | Deploying Soon"/>
    	<meta property="og:image" content="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash3/263332_561679930537792_753933643_n.jpg"/>
    	<meta type="description" content="We're almost there! Code your hearts out, with nothing but a new innovative way of learning programming, socializing with programmers and lending a helping hand. " />
    	<meta type="og:description" content="We're almost there! Code your hearts out, with nothing but a new innovative way of learning programming, socializing with programmers and lending a helping hand. " />
    	<meta type="keywords" content="Codify, Codify.ph, Deployment, Soon" /> <!-- too lazy to fix keywords -->
  	</head>
	<body>
		<div class="container">
		
			<div class="centered">
				<div id="countdown">
				<h1>Deploying Soon.</h1>
			  		<div class="message">
				  		<p>We're almost there! Code your hearts out, with nothing but a new innovative way of learning programming, socializing with programmers and lending a helping hand. </p>
		  				<!-- Inserts links to social pages here -->
		  				<a class="well" href="https://www.facebook.com/PhilippineDevnet" target="_blank">Phil DevNet</a>
		  				<a class="well" href="https://www.facebook.com/Codifyph" target="_blank">Codify PH</a>
	  				</div>
	  				<!-- Countdown container, do not delete -->
					<ul id="timer" class="pull-right"></ul>  		
			  	</div>
			</div>
	    
		   <div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner container">
			<a class="brand" href="#">Codify<span>&#176;</span></a>
			<ul class="nav pull-right">
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Feedback</a>
					<ul class="dropdown-menu">
						<li><a href="devnotes.txt">Dev Notes</a></li>
						<li><a href="Phil DevNet" target="_blank">Philippine DevNet</a></li>
						<li class="divider"></li>
						
					</ul>
				</li>
			</ul>
			</div>
		</div> 
	    </div><!-- /.container -->
    
    <script src="{{ URL::to('assets') }}/js/jquery-1.8.1.min.js"></script>
    <!-- Bootstrap --><script src="{{ URL::to('assets') }}/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- Set your launch date below -->
	<script>
    jQuery(document).ready(function($) {
		CreateTimer("timer", {
			year: 2013,
			month: 7,
			day: 15
		});
	});
	</script>
  </body>
</html>