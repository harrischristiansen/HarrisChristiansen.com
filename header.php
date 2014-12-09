<!DOCTYPE HTML>
<html>
	<head>
		<title>Harris Christiansen <? if($pageTitle!="") { echo " - ".$pageTitle; } ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-layers.min.js"></script>
		<script src="/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css" /><![endif]-->
		
		<!-- Google Analytics -->
	    <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
			ga('create', 'UA-15660382-5', 'harrischristiansen.com');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
	  	</script>
	</head>
	<body>

		<!-- NavBar -->
			<header id="header" class="skel-layers-fixed">
				<? if($page=="home") { ?>
				<h1><a href="#banner" class="icon fa-gears">Harris Christiansen</a></h1>
				<? } else { ?>
				<h1><a href="/home" class="icon fa-gears">Harris Christiansen</a></h1>
				<? } ?>
				<nav id="nav">
					<ul>
						<? if($page=="home") { ?>
						<li><a href="#banner">Home</a></li>
						<? } else { ?>
						<li><a href="/home">Home</a></li>
						<? } ?>
						<li>
							<a href="#" class="icon fa-angle-down">Experience</a>
							<ul>
								<? if($page=="work") { ?>
								<li><a href="#">Work</a></li>
								<? } else { ?>
								<li><a href="/work">Work</a></li>
								<? } ?>
								<? if($page=="projects") { ?>
								<li><a href="#">Projects</a></li>
								<? } else { ?>
								<li><a href="/projects">Projects</a></li>
								<? } ?>
								<? if($page=="hobbies") { ?>
								<li><a href="#">Hobbies</a></li>
								<? } else { ?>
								<li><a href="/hobbies">Hobbies</a></li>
								<? } ?>
								<li>
									<? if($page=="hackathons") { ?>
									<a href="#">Hackathons</a>
									<? } else { ?>
									<a href="/hackathons">Hackathons</a>
									<? } ?>
									<ul>
										<li><a href="http://challengepost.com/software/virtual-builder" target="_blank">Virtual Builder</a></li>
										<li><a href="http://challengepost.com/software/ifollow-quadcopter" target="_blank">iFollow</a></li>
										<li><a href="http://challengepost.com/software/ouijabot-of7ax" target="_blank">OuijaBot</a></li>
										<li><a href="http://challengepost.com/software/preview" target="_blank">PreView</a></li>
										<li><a href="http://challengepost.com/software/quad-control" target="_blank">Quad Control</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<? if($page=="home") { ?>
						<li><a href="#contact">Contact</a></li>
						<? } else { ?>
						<li><a href="/home#contact">Contact</a></li>
						<? } ?>
					</ul>
				</nav>
			</header>