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

    <!-- SCRIPT HOTJAR -->

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

    <!-- SCRIPT ANALYTICS -->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101090405-1', 'auto');
        ga('send', 'pageview');

    </script>

	<link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800" rel="stylesheet">

</head>
<body>
<?php include_once("analyticstracking.php") ?>
	<header>
		<nav>
			<a href="#presentation" class="home no-mobile"><img src="images/logo.png" alt="Logo Opus" id="logo" /></a>
			<ul class="navigation">
				<li class="active"><a href="#presentation"><?php echo ACCUEIL; ?></a></li>
				<li><a href="#concept"><?php echo CONCEPT; ?></a></li>
				<li><a href="#contact"><?php echo CONTACT; ?></a></li>
			</ul>
			<ul id="flag">
				<?php 
					$noMobileFr = ($lang == "fr") ? "no-mobile" : "";
					$noMobileEn = ($lang == "en") ? "no-mobile" : "";
				?>
				<li class="<?php echo $noMobileFr; ?>"><a href="/fr"><img src="images/francais.png" alt="français"/></a></li>
				<li class="<?php echo $noMobileEn; ?>"><a href="/en"><img src="images/english.png" alt="english"/></a></li>
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
				<img src="images/iphone.png" class="center" alt=""/>
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
						<li><img src="images/tel.png" alt="logo telephone" /> 06.70.28.61.80</li>
						<li><img src="images/map.png" alt="logo telephone" /> OPUS<br>
						<span>5 rue Froment, 75011 Paris - FRANCE</span></li>
						<li><img src="images/mail.png" alt="logo telephone" /> <a href="mailto:unit.iesa@gmail.com">unit.iesa@gmail.com</a></li>
					</ul>
					<ul class="social">
						<li><a href="https://www.facebook.com/GetOpusApp" target="_BLANK"><img src="images/fb.png" /></a></li>
						<li><a href="https://twitter.com/GetOpus" target="_BLANK"><img src="images/tw.png" /></a></li>
						<li><a href="https://www.instagram.com/getopusapp/" target="_BLANK"><img src="images/insta.png" /></a></li>
						<!-- <li><a href="" target="_BLANK"><img src="images/yt.png" /></a></li> -->
						<!-- <li><a href="https://www.linkedin.com/in/opus-app-67347b145/" target="_BLANK"><img src="images/lkd.png" /></a></li> -->
					</ul>
				</div>
				<div id="thanks">
					<p>Merci pour votre confiance ! Un e-mail de confirmation vient de vous être envoyé.</p>
				</div>
				<form action="" method="POST">
					<h2>Abonnez-vous à la newsletter</h2>
					<input type="mail" name="" placeholder="Adresse mail">
					<button type="submit" class="button">Valider</button>
				</form>
			</div>
		</article>
	</section>

	<footer>
		<p>Opus - <?php echo COPYRIGHT; ?> © 2017</p>
		<p><a href=""><?php echo MENTIONS; ?></a></p>
	</footer>

	<div class="overlay"></div>
	<div class="modal">
		<button class="close">x</button>
		<h1>Le présent site est édité par l'agence Unit :</h1>
		<p>
			Adresse : 5 rue Froment 75011 Paris, France<br/>
			CEO : M. Antonin Cazin<br/>
			Capital social : 100 €<br/>
			L’hébergement du site est assuré par OVH, société par actions simplifiée dont le siège social est au 2 rue Kellermann, 59100 Roubaix et dont le numéro de téléphone est le 0820 698 765.</p>
	</div>

	<button class="scroll-top"><img src="images/scroll-top.png" alt="Retour en haut de page" /></button>

		
	<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
