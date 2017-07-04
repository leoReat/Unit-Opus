<?php
	require_once("assets/config.php");
?>
<!doctype html>
<head>
	<title>OPUS - Digitalisez votre musée</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/museum.css">
	<link rel="icon" type="image/png" href="<?php echo $urlBASE; ?>images/favicon.png" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Opus, musée, digital">
	<meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries." />
	<meta name="title" content="Opus - Digitalisez votre musée">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<script src="<?php echo $urlBASE; ?>js/jquery.min.js"></script>

    <!-- SCRIPT HOTJAR -->

	<script>
	    // (function(h,o,t,j,a,r){
	    //     h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	    //     h._hjSettings={hjid:530706,hjsv:5};
	    //     a=o.getElementsByTagName('head')[0];
	    //     r=o.createElement('script');r.async=1;
	    //     r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	    //     a.appendChild(r);
	    // })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

    <!-- SCRIPT ANALYTICS -->

    <script>
        // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        //         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        //     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		//
        // ga('create', 'UA-101090405-1', 'auto');
        // ga('send', 'pageview');

    </script>

	<link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800" rel="stylesheet">

</head>
<body class="museum">
	<header>
		<nav>
			<h1>
				<a href="#" class="home no-mobile">
				<img src="<?php echo $urlBASE; ?>images/logo-blanc.png" alt="Logo Opus" id="logo" title="Logo de l'application Opus" />
				<img src="<?php echo $urlBASE; ?>images/logo.png" alt="Logo Opus" id="logo" title="Logo de l'application Opus" class="logo2" />
				</a>
			</h1>

			<form method="POST">
				<select class="lang" name="lang">
					<option value="fr"<?php echo ($lang == "fr") ? " selected" : ""; ?>>Français</option>
					<option value="en"<?php echo ($lang == "en") ? " selected" : ""; ?>>Anglais</option>
					<option value="it"<?php echo ($lang == "it") ? " selected" : ""; ?>>Italien</option>
				</select>
			</form>
		</nav>
	</header>
	<section>

		<article id="concept" class="concept">
			<div id="bg1"></div>
			<div id="bg2"></div>
			<div id="bg3"></div>
			
			<div class="content">
				<img src="<?php echo $urlBASE; ?>images/joconde.png" alt="mockup opus" title="visuelle télephone opus" class="iPhone"/>

				<div class="center strate1">
					<h2>Opus</h2>
					<h2>La boutique musée embarquée</h2>
				</div>

				<div class="bottom">
					<h3>Commencez la visite</h3>
					<div class="arrow"></div>
				</div>
			</div>
		</article>

		<article class="concept">
			<div class="center strate2">
				<h2>La joconde au musée</h2>
				<button type="button" name="button"><img src="<?php echo $urlBASE; ?>images/more.png" alt="lire plus" title="Obtenir plus d'informations"/></button>
				<p>L'oeuvre vous plaît ? Aucun problème. Scannez l'oeuvre grâce à votre application Opus et ajoutez là à vos favoris. Vous aurez accès accès à des informations, dans la langue que vous souhaitez, sur le tableau ainsi qu'une boutique embarquée réservée à celui-ci.</p>
			</div>
		</article>

		<article class="concept">
			<div class="center strate3">
				<h2>La joconde en boutique</h2>
				<button type="button" name="button"><img src="<?php echo $urlBASE; ?>images/more.png" alt="lire plus" title="Obtenir plus d'informations"/></button>
				<p>Opus vous propose une sélection de représentations et de produits, que vous pouvez directement payer via votre smartphone, depuis le musée ou même sur la terrasse d'un café, après la visite.</p>
			</div>
		</article>

		<article class="concept">
			<div class="center strate4">
				<h2>La joconde chez vous</h2>
				<button type="button" name="button"><img src="<?php echo $urlBASE; ?>images/more.png" alt="lire plus" title="Obtenir plus d'informations"/></button>
				<p>Le système de livraison vous permet de ne pas vous encombrer. Recevez votre reproduction directement chez vous et contemplez la à votre guise.</p>
			</div>
		</article>
	</section>
	<footer>
		<div id="contact">
			<h2>Vivez l'expérience,<br> rejoignez-nous sur les réseaux sociaux.</h2>
			<ul class="social">
				<li><a href="https://www.facebook.com/GetOpusApp" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/fb.png" alt="lien facebook opus" title="redirection facebook"/></a></li>
				<li><a href="https://twitter.com/GetOpus" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/tw.png" alt="lien twitter opus" title="redirection twitter"/></a></li>
				<li><a href="https://www.instagram.com/getopusapp/" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/insta.png" alt="lien instagram opus" title="redirection instagram"/></a></li>
				<!-- <li><a href="" target="_BLANK"><img src="images/yt.png" /></a></li> -->
				<!-- <li><a href="https://www.linkedin.com/in/opus-app-67347b145/" target="_BLANK"><img src="images/lkd.png" /></a></li> -->
				<li><a href="http://m.me/GetOpusApp" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/messenger.png" alt="live chat messenger avec Opus" title="discussion opus"/></a></li>
			</ul>

			<h3>Vous êtes professionnel ?</h3>
			<a href="/pro" class="button">En savoir plus</a>

		</div>
		<p>Opus - <?php echo COPYRIGHT; ?> © 2017</p>
		<p><a href=""><?php echo MENTIONS; ?></a></p>
	</footer>



	<div class="overlay"></div>
	<div class="modal">
		<button class="close">x</button>
		<h2><?php echo MENTIONS_TITRE; ?></h2>
		<p><?php echo MENTIONS_TEXTE; ?></p>
	</div>

    <!-- COOKIES -->
    <div id="cookies"></div>
    <script src="<?php echo $urlBASE; ?>js/cookiechoices.js"></script>
    <script>document.addEventListener('DOMContentLoaded',
            function(event){
        cookieChoices.showCookieConsentBar('<?php echo COOKIES; ?>', '<?php echo COOKIES_AGREE; ?>', '<?php echo COOKIES_LEARN; ?>', "http://get-opus.fr", '<?php echo COOKIES2; ?>');

            $("footer p:nth-of-type(2) a, .overlay, button.close, #cookieChoiceInfo a:nth-of-type(1)").click(function(e){
                e.preventDefault();
                $(".modal, .overlay").fadeToggle(300);
                $("body").toggleClass("no-scroll");
            });
    });
    </script>

	<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
	<script src="<?php echo $urlBASE; ?>js/museum.js"></script>

</body>
</html>
