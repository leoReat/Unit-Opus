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
			<h1><a href="#presentation" class="home no-mobile"><img src="<?php echo $urlBASE; ?>images/logo.png" alt="Logo Opus" id="logo" title="Logo de l'application Opus" /></a></h1>

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
			<div class="content">

				<img src="<?php echo $urlBASE; ?>images/joconde.png" alt="mockup opus" title="visuelle télephone opus" class="iPhone"/>

				<div class="center">
					<h2>Opus</h2>
					<p>La boutique musée embarquée</p>
				</div>
				<h3>Commencez la visite</h3>
			</div>
		</article>

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
	<script src="<?php echo $urlBASE; ?>js/museum.js"></script>

</body>
</html>
