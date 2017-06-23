<?php
	require_once("assets/config.php");
?>
<!doctype html>
<head>
	<title>OPUS - Digitalisez votre musée</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="<?php echo $urlBASE; ?>css/medias.css" type="text/css" />
	<link rel="icon" type="image/png" href="<?php echo $urlBASE; ?>images/favicon.png" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Opus, musée, digital">
	<meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries." />
	<meta name="title" content="Opus - Digitalisez votre musée">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<script src="<?php echo $urlBASE; ?>js/jquery.min.js"></script>

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
	<header>
		<nav>
			<h1><a href="#presentation" class="home no-mobile"><img src="<?php echo $urlBASE; ?>images/logo.png" alt="Logo Opus" id="logo" title="Logo de l'application Opus" /></a></h1>

			<ul class="navigation">
				<li class="active"><a href="#presentation"><?php echo ACCUEIL; ?></a></li>
				<li><a href="#concept"><?php echo CONCEPT; ?></a></li>
				<li><a href="#contact"><?php echo CONTACT; ?></a></li>
			</ul>
			<ul id="flag">
				<?php 
					$noMobileFr = ($lang == "fr") ? "no-mobile" : "";
					$noMobileEn = ($lang == "en") ? "no-mobile" : "";

					$urlPro = (isset($_GET["pro"])) ? "/pro" : "";
				?>
				<li class="<?php echo $noMobileFr; ?>"><a href="<?php echo $urlPro; ?>/fr"><img src="<?php echo $urlBASE; ?>images/francais.png" alt="français" title="redirection page français"/></a></li>
				<li class="<?php echo $noMobileEn; ?>"><a href="<?php echo $urlPro; ?>/en"><img src="<?php echo $urlBASE; ?>images/english.png" alt="english" title="redirection page anglais"/></a></li>
			</ul>
		</nav>
	</header>
	<section>


		<?php
			require_once("assets/presentation".$pro.".html")
		?>

		<article id="concept">
			<div class="content">
				<img src="<?php echo $urlBASE; ?>images/iphone.png" class="center" alt="mockup opus" title="visuelle télephone opus"/>
				<div class="center">
				<?php
					require_once("assets/concept".$pro.".html")
				?>
					<div id="thanks">
						<p>Merci pour votre confiance ! Un e-mail de confirmation vient de vous être envoyé.</p>
					</div>
					<div id="connect">
						<a href="#concept" class="button inscription"><?php echo CONCEPT_CTA ?></a> <br>
						<form>
							<input type="text" name="mail" placeholder="Adresse mail">
							<input type="hidden" name="pro" value="<?php echo $pro; ?>">
							<button>OK</button>
							<p>OU</p>
							<p><a href="#concept" class="button google connect">Google</a>
							<a href="#concept" class="button facebook connect">Facebook</a></p>
						</form>
					</div>

				</div>
			</div>
		</article>

		<article id="contact">
			<div class="content center">
				<div class="contact-left">
					<h2><?php echo CONTACT_TITRE; ?></h2>
					<p><?php echo CONTACT_TEXTE; ?></p>
					<ul>
						<li><img src="<?php echo $urlBASE; ?>images/tel.png" alt="logo telephone" title="pictogramme téléphone"/> 06.70.28.61.80</li>
						<li><img src="<?php echo $urlBASE; ?>images/map.png" alt="logo telephone" title="pictogramme carte"/> OPUS<br>
						<span>5 rue Froment, 75011 Paris - FRANCE</span></li>
						<li><img src="<?php echo $urlBASE; ?>images/mail.png" alt="logo telephone" title="pictogramme mail"/> <a href="mailto:contact@get-opus.fr">contact@get-opus.fr</a></li>
					</ul>
					<ul class="social">
						<li><a href="https://www.facebook.com/GetOpusApp" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/fb.png" alt="lien facebook opus" title="redirection facebook"/></a></li>
						<li><a href="https://twitter.com/GetOpus" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/tw.png" alt="lien twitter opus" title="redirection twitter"/></a></li>
						<li><a href="https://www.instagram.com/getopusapp/" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/insta.png" alt="lien instagram opus" title="redirection instagram"/></a></li>
						<!-- <li><a href="" target="_BLANK"><img src="images/yt.png" /></a></li> -->
						<!-- <li><a href="https://www.linkedin.com/in/opus-app-67347b145/" target="_BLANK"><img src="images/lkd.png" /></a></li> -->
						<li><a href="http://m.me/GetOpusApp" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/messenger.png" alt="live chat messenger avec Opus" title="discussion opus"/></a></li>
					</ul>
				</div>
				
				<form action="#" method="POST">
					<input type="text" name="nom" placeholder="Nom">
					<input type="mail" name="mail" placeholder="Adresse mail">
					<textarea placeholder="Message"></textarea>
					<button type="submit" class="button">Envoyer</button>
				</form>
			</div>
			<button class="scroll-top"><img src="<?php echo $urlBASE; ?>images/scroll-top.png" alt="Retour en haut de page" title="retour en haut"/></button>
		</article>
	</section>

	<footer>
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
	<script src="<?php echo $urlBASE; ?>js/main.js"></script>

</body>
</html>
