<!doctype html>
<head>
	<title>OPUS - Digitalisez votre musée</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Opus, musée, digital">
	<meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries." />
	<meta name="title" content="Opus - Digitalisez votre musée">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="favicon.png" />

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
			<a href=""><img src="images/logo.png" alt="Logo Opus" id="logo" /></a>
			<ul class="navigation">
				<li class="active"><a href="#presentation">Accueil</a></li>
				<li><a href="#concept">Concept</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<ul id="flag">
				<li><a href=""><img src="images/francais.png" alt="français"/></a></li>
				<li><a href=""><img src="images/english.png" alt="english"/></a></li>
			</ul>
		</nav>
	</header>
	<section>
		<article id="presentation">
			<div class="content">
				<img src="images/sculpture.png" class="center" />
				<div class="center">
					<h1>Aimez, scannez, recevez.</h1>
					<p><strong>Opus</strong>, l'application qui achemine vos oeuvres d'art préférées jusqu'à chez vous !</p>
					<a href="#concept">En savoir plus</a>
				</div>
			</div>
		</article>

		<article id="concept">
			<div class="content">
				<img src="images/iphone.png" class="center" />
				<div class="center">
					<p><strong>Opus</strong> vous permet, au cours d’une visite de musée ou galerie d’art, d’acheter la litographie d’une oeuvre que vous appréciez, sans passer par la boutique physique.</p>
					<p>En un seul geste <strong>Opus</strong> reconnaît l’oeuvre devant laquelle vous vous trouvez et la livre directement chez vous.</p>
					<a href="#contact">Contact</a>
				</div>
			</div>
		</article>

		<article id="contact">
			<div class="content">
				<div class="center">
					<p>N’hésitez pas à nous contacter si vous avez une question à poser, une suggestion à apporter, un partenariat à proposer ou pour tout autre demande.</p>
					<a href="">Contact</a>
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

		
		$("header nav ul.navigation li a, div.center a").click(function(e){
			e.preventDefault();
			var strate = $(this).attr("href");
			console.log(this, strate)
		 	if(strate) $('html, body').animate({scrollTop:$(strate).offset().top - 91}, 'slow');
		});

		$(document).scroll(function(){
			var navHeight = $("header").height()
			var heightStrates = $(window).height() - navHeight - 2;
			console.log($(window).scrollTop() / heightStrates)
			var index = Math.ceil($(window).scrollTop() / heightStrates) - 1;
			if(index < 0) index = 0;
			$("header nav ul.navigation li").removeClass("active");
			$("header nav ul.navigation li").eq(index).addClass("active");
		});
	</script>
</body>
</html>
