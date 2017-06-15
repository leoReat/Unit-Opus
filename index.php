<?php
	$lang = "fr";
	if(isset($_GET["lang"]) && $_GET["lang"] == "en") $lang = "en";
	require_once("lang/".$lang.".lang.php");
?>
<!doctype html>
<head>
	<title>OPUS - Digitalisez votre musée</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/medias.css"> -->
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="css/medias.css" type="text/css" />
	<link rel="icon" type="image/png" href="/images/favicon.png" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Opus, musée, digital">
	<meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries." />
	<meta name="title" content="Opus - Digitalisez votre musée">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<script src="js/jquery.min.js"></script>
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:530706,hjsv:5};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

	<link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800" rel="stylesheet">

</head>
<body>
	<header>
		<nav>
			<a href="#presentation" class="home no-mobile"><img src="images/logo.png" alt="Logo Opus" id="logo" /></a>
			<ul class="navigation">
				<li class="active"><a href="#presentation"><?php echo ACCUEIL; ?></a></li>
				<li><a href="#concept"><?php echo CONCEPT; ?></a></li>
				<li><a href="#contact"><?php echo CONTACT; ?></a></li>
			</ul>
			<ul id="flag">
				<li><a href="/fr"><img src="images/francais.png" alt="français"/></a></li>
				<li><a href="/en"><img src="images/english.png" alt="english"/></a></li>
			</ul>
		</nav>
	</header>
	<section>
		<article id="presentation">
			<div class="content">
				<img src="images/sculpture.png" class="center" />
				<div class="center">
					<h1><?php echo PRESENTATION_TITRE; ?></h1>
					<p><?php echo PRESENTATION_TEXTE; ?></p>
					<a href="#concept" class="button scroll"><?php echo PRESENTATION_CTA; ?></a>
				</div>
			</div>
		</article>

		<article id="concept">
			<div class="content">
				<img src="images/iphone.png" class="center" />
				<div class="center">
					<p><?php echo CONCEPT_TEXTE_1; ?></p>
					<p><?php echo CONCEPT_TEXTE_2; ?></p>
					<a href="#contact" class="button scroll"><?php echo CONCEPT_CTA ?></a>
				</div>
			</div>
		</article>

		<article id="contact">
			<div class="content center">
				<div class="chat">
					<h1><?php echo CONTACT_TITRE; ?></h1>
					<p><?php echo CONTACT_TEXTE; ?></p>
					<a href="http://m.me/GetOpusApp" target="_BLANK" class="button"><img src="images/messenger.svg" alt="live chat messenger avec Opus" /><?php echo CONTACT_CTA; ?></a>
				</div>
				<div class="contact-left">
					<ul>
						<li>0670286180</li>
						<li>OPUS<br>
						5 rue Froment, 75011 Paris - FRANCE</li>
						<li>unit.iesa@gmail.com</li>
					</ul>
					<ul class="social">
						<li><a href="https://www.facebook.com/GetOpusApp" target="_BLANK"><img src="images/fb.png" /></a></li>
						<li><a href=""><img src="images/tw.png" /></a></li>
						<li><a href=""><img src="images/insta.png" /></a></li>
						<li><a href=""><img src="images/yt.png" /></a></li>
					</ul>
				</div>
			</div>
		</article>
	</section>

	<footer>
		<p>Opus - <?php echo COPYRIGHT; ?> © 2017</p>
		<p><a href=""><?php echo MENTIONS; ?></a></p>
	</footer>

	<div class="overlay"></div>
	<div class="modal">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

		
	<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
