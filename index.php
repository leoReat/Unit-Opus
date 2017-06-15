<?php
	$lang = "fr";
	if(isset($_GET["lang"]) && $_GET["lang"] == "en") $lang = "en";
	require_once("lang/".$lang.".lang.php");
?>
<!doctype html>
<head>
	<title>OPUS - Digitalisez votre musée</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 640px)" href="mdeias.css" type="text/css" />
	<script src="js/jquery.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Opus, musée, digital">
	<meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries." />
	<meta name="title" content="Opus - Digitalisez votre musée">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="/images/favicon.png" />



	<!-- Hotjar Tracking Code for http://get-opus.fr/ -->
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
			<a href="#presentation" class="home"><img src="images/logo.png" alt="Logo Opus" id="logo" /></a>
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
					<a href="#concept"><?php echo PRESENTATION_CTA; ?></a>
				</div>
			</div>
		</article>

		<article id="concept">
			<div class="content">
				<img src="images/iphone.png" class="center" />
				<div class="center">
					<p><?php echo CONCEPT_TEXTE_1; ?></p>
					<p><?php echo CONCEPT_TEXTE_2; ?></p>
					<a href="#contact"><?php echo CONCEPT_CTA ?></a>
				</div>
			</div>
		</article>

		<article id="contact">
			<div class="content">
				<div class="center">
					<p><?php echo CONTACT_TEXTE; ?></p>
				</div>
				<form>
					<input type="text" name="" />
					<input type="mail" name="" />
				</form>
			</div>
		</article>

		<footer>
		<p>Opus - Tous droits réservés - 2017</p>
		<ul>
			<li><a href="">Facebook</a></li>
			<li><a href="">Twitter</a></li>
			<li><a href="">Instagram</a></li>
		</ul>
	</footer>
	</section>


		
	<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
	<script>
		// Initialize Firebase
		var config = {
			apiKey: "AIzaSyAeZ7vDVXfL0vtZFi2-esLuIwsVyDoIC1c",
			authDomain: "unit-60c0b.firebaseapp.com",
			databaseURL: "https://unit-60c0b.firebaseio.com",
			projectId: "unit-60c0b",
			storageBucket: "unit-60c0b.appspot.com",
			messagingSenderId: "1051655555307"
		};

		firebase.initializeApp(config);

		$.getJSON('//freegeoip.net/json/?callback=?', function(infos) {
			var now =  Date.now();
	  		firebase.database().ref('visiteurs/' + now).set({
				infos
			});
			var ip = infos.ip;

			$("form").submit(function(e){
				e.preventDefault();
				var mail = $("#contact input[type=mail]").val();
				firebase.database().ref('visiteurs/' + now).set({
					infos,
					mail:mail
				});

				$("#contact").fadeOut();
				$("#thanks").fadeIn();
			});
		});

		
		$("header nav .home, header nav ul.navigation li a, div.center a").click(function(e){
			e.preventDefault();
			var strate = $(this).attr("href");
		 	if(strate) $('html, body').animate({scrollTop:$(strate).offset().top - 91}, 'slow');
		});

		$(document).scroll(function(){
			var navHeight = $("header").height()
			var heightStrates = $(window).height() - navHeight - 2;
			var index = Math.ceil($(window).scrollTop() / heightStrates) - 1;
			if(index < 0) index = 0;
			$("header nav ul.navigation li").removeClass("active");
			$("header nav ul.navigation li").eq(index).addClass("active");
		});
	</script>
</body>
</html>
