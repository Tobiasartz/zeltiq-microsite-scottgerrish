<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $title; ?>">
	<meta name="author" content="RIESTER">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="assets/css/style.css?v=1">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<!-- For progressively larger displays -->
	<link rel="stylesheet" media="only screen and (min-width: 600px)" href="assets/css/600.css?v=3">
	<link rel="stylesheet" media="only screen and (min-width: 960px)" href="assets/css/960.css?v=3">
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script src="/assets/js/modernizr-2.5.0.min.js"></script>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="assets/css/600.css?v=3">
		<link rel="stylesheet" href="assets/css/960.css?v=3">
	<![endif]-->
	<!--[if gte IE 9]>
		<style type="text/css"> .gradient { filter: none; } </style>
	<![endif]-->
	<script>
	  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  // ga('create', 'UA-42061301-1', 'coolsculptingtucson.com');
	  // ga('send', 'pageview');
	</script>
	<script type='text/javascript'>
		(function (d, t) {
		var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
		bh.type = 'text/javascript';
		bh.src = '//www.bugherd.com/sidebarv2.js?apikey=fbey7asthm4epch3xccyjg';
		s.parentNode.insertBefore(bh, s);
		})(document, 'script');
	</script>
</head>

<body <?php if(!empty($bodyClass)) echo 'class="'. $bodyClass .'"'; ?>>
	<header id="global-header">
		<div id="global-branding">
			<div class="wrapper clearfix">
				<h1 class="logo-coolsculpting"><a href="/" class="ir">coolsculpting</a></h1>
				<div class="btn btn-grey show-nav">
					<a href="#">Menu</a>
				</div>
				<!-- <h2 class="logo-practice clearfix"><span class="ir">Gerrish &amp; Associates</span></h2> -->
				<div class="logo-practice clearfix"><h2 class="ir">Gerrish &amp; Associates</h2><p>703.255.5580</p></div>
			</div>
		</div>
		<nav id="global-nav">
			<ul class="wrapper clearfix">
				<li id="nav-about"><a href="about.php">About<br/> Dr. Gerrish</a></li>
				<li id="nav-how"><a href="howitworks.php">How It<br/> Works</a></li>
				<li id="nav-gallery"><a href="gallery.php">Before and<br/> After Photos</a></li>
				<li id="nav-patients"><a href="patients.php">Hear from<br/> Real Patients</a></li>
				<li id="nav-consultation"><a href="consultation.php">Schedule a<br/> Consultation</a></li>
			</ul>
		</nav>
	</header>

	<div id="main" role="main">