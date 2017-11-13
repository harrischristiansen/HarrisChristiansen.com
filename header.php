<!DOCTYPE HTML>
<html>
	<head>
		<title>Harris Christiansen <? if($pageTitle!="") { echo " - ".$pageTitle; } ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<? echo $pageDesc; ?>" />
		<meta name="keywords" content="<? echo $pageKeywords; ?>" />
		<meta name="author" content="Harris Christiansen">
		<link REL="SHORTCUT ICON" HREF="/images/fav.png">
		
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-layers.min.js"></script>
		<script src="/js/init.js?v=1"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css?v=2" />
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
						<li><a href="<? echo ($page == "home") ? '#banner' : '/home'; ?>">Home</a></li>
						<li>
							<a href="#" class="icon fa-angle-down">Experience</a>
							<ul>
								<li><a href="<? echo ($page == "work") ? '#' : '/work'; ?>">Work</a></li>
								<li><a href="<? echo ($page == "projects") ? '#' : '/projects'; ?>">Projects</a></li>
								<li><a href="<? echo ($page == "hobbies") ? '#' : '/hobbies'; ?>">Hobbies</a></li>
								<li><a href="<? echo ($page == "hackathons") ? '#' : '/hackathons'; ?>">Hackathons</a></li>
							</ul>
						</li>
						<li><a href="<? echo ($page == "home") ? '#contact' : 'home#contact'; ?>">Contact</a></li>
					</ul>
				</nav>
			</header>