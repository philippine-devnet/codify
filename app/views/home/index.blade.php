<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css"/>
	<meta type="title" content="Codify | PH" />
	<meta type="description" content=">Programmers, Coders, Developers, Hackers Enthusiasts are all wanting to have their own home. Besides forums, besides facebook, besides any other social media  - Developers wants to crave much more learning, teach people and answer people's questions. With garnering trust, dedication and ethusiasm - And that's codify." />
	<script type="text/javascript" src="js/jquery-1.9.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>

	<script>
    jQuery(document).ready(function($) {
		CreateTimer("timer", {
			year: 2013,
			month: 7,
			day: 15
		});
	});
	$(document).ready(function(){
		var clicked = false;
		
		$("[uid=chevron-container]").click(function(){
				$(this).animate({
					bottom: clicked ? "-600px" : "0px" ,
				}, 500);
				if(!clicked)
					$("[uid=chevron]").removeClass("icon-chevron-up").addClass("icon-chevron-down");
				else
					$("[uid=chevron]").removeClass("icon-chevron-down").addClass("icon-chevron-up");
			clicked = !clicked;
		});
	});
	</script>
	<meta charset="UTF-8">
	<title>Codify PH | Deploying Soon</title>
</head>
<body>
	<div id="social-wrapper">
		<ul>
			<li><a href="https://www.facebook.com/PhilippineDevnet" target="_blank"><img src="img/facebook.png"/></a></li>
			<li><a href="#"><img src="img/google-plus.png"/></a></li>
			<li><a href="#"><img src="img/rss.png"/></a></li>
			<li><a href="#"><img src="img/twitter-bird.png"/></a></li>
		</ul>
	</div>

	<div class="row-fluid">
		<div 
		<div class="span12 wrapper">
			<img src="img/cdfyLogo.png" />
		</div>
	</div>
	<div class="row-fluid nano" id='main-container' uid='chevron-container' style='bottom:-600px;'>
		<div class="span12 content">
			<i class="icon-chevron-up chevron-kill" uid='chevron' style="font-size:64px; position:absolute;"></i>
			<div class="span5">
				<!-- Countdown container, do not delete -->

					<ul id="timer" style='margin:0 auto; text-align:center;'></ul>  	
			</div>
			<div class="span6">
				<h1 class="merit"><span class="deploying">DEPLOYING</span>&nbsp;<span class="soon">SOON</span></h1>
				<div class="row-fluid">
					<div class="span8">
						<p class="lato">Programmers, Coders, Developers, Hackers Enthusiasts are all wanting to have their own home. Besides forums, besides facebook, besides any other social media  - Developers wants to crave much more learning, teach people and answer people's questions. With garnering trust, dedication and ethusiasm - And that's codify.</p>
					</div>
				</div>
				<h1 class="merit" style="margin-top:20px;"><span class="deploying">WHAT'S</span>&nbsp;<span class="soon">CODIFY?</span></h1>
				<div class="row-fluid">
					<div class="span8">
						<p class="lato">Codify is an ongoing start up project by people from a facebook group known as "Pinoy IT Geeks" - and "Philippine DevNet". Though Codify, due to Codify.ph being vague, it does offer the question - "What is Codify?". Codify is our word - coined that developers and enthusiasts alike could share their views on the world by coding, sharing media by codes and learn by example. Codify is bound to be an activity site - interactive as it maybe, and will offer up to be a complement to other web learning tools.</p>
						<p class="lato">Codify started by a simple activity site, planned by members of PITG as well as PHDN and help mass learning on the populi without being expensive enough like other media. This, as well as its source code - will always be open. - and always will be free.</p>
					</div>
				</div>
				<p class="lato">If you're interested on helping out with the project, do PM us at our <a href="https://www.facebook.com/PhilippineDevnet">facebook</a> page.</p>
				<p class="lato">On Development By:&nbsp;&nbsp;<br/><a href="https://www.facebook.com/PhilippineDevnet">Philippine DevNet</a>&nbsp;|&nbsp;<a href="https://www.facebook.com/HakzProject">Hakz Project</a>&nbsp;|&nbsp;<a href="https://github.com/philippine-devnet/codify">Codify</a></p>
			</div>
		</div>
		
</body>
</html>