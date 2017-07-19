<?php
	ini_set('display_errors',1);
	require_once("assets/config.php");

	if(isset($_GET['deconnexion'])){
		session_destroy();
		header('location: /app.php');
	}

	function redirectIfConnect($auth){
		if($auth && isset($_SESSION['username'])){
			header('Location: app.php?page=QRcode');
		}
		if(!$auth && !isset($_SESSION['username'])){
			header('Location: app.php');
		}
	}

	$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : "";
	switch ($page) {
		case 'QRcode':
			redirectIfConnect(false);
			$fichier = "QRcode";
			$class = "home app";
			$idMenu = 1;
		break;

		case 'opus':
			redirectIfConnect(false);
			$fichier = "opus";
			$class = "home app";
			$idMenu = 1;
		break;

		case 'profil':
			redirectIfConnect(false);
			$fichier = "profil";
			$class = "home app";
			$idMenu = 3;
		break;

		case 'achats':
			redirectIfConnect(false);
			$fichier = "achats";
			$class = "home app";
			$idMenu = 2;
		break;

		case 'panier':
			redirectIfConnect(false);
			$fichier = "panier";
			$class = "home app";
			$idMenu = 2;
		break;

		case 'command':
			redirectIfConnect(false);
			$fichier = "command";
			$class = "home app";
			$idMenu = 2;
		break;

		// PROFIL
		case 'compte':
			redirectIfConnect(false);
			$fichier = "compte";
			$class = "home app";
			$idMenu = 3;
		break;


		// ADMIN
		case 'admin':
			redirectIfConnect(false);
			$fichier = "admin";
			$class = "home app";
			$idMenu = 3;
		break;

		case 'login':
			redirectIfConnect(true);
			$fichier = "login";
			$class = "home login";
		break;

		case 'register':
			redirectIfConnect(true);
			$fichier = "register";
			$class = "home register";
		break;



		default:
			redirectIfConnect(true);
			$fichier = "home";
			$class = "home loading";
		break;
	}

	?>
	<!doctype html>
	<head>
		<title>OPUS - Digitalisez votre musée</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/style.css">
	    <link rel="stylesheet" media="screen and (max-width: 980px)" href="<?php echo $urlBASE; ?>css/medias.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/app.css">

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

		<!-- <link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700,800" rel="stylesheet"> -->
	</head>
	<body class="<?php echo $class; ?>" data-id="<?php echo $_SESSION['mail']; ?>">
		<?php
			if(isset($_SESSION['username'])){
				if($fichier == "QRcode") require_once("assets/app/header.php");
				else require_once("assets/app/header-title.php");
				echo '<div class="apploader"></div>';
				echo '<div class="container">';
			}

			require_once("assets/app/".$fichier.".php");

			if(isset($_SESSION['username'])) {
				echo '</div>';
				require_once("assets/app/nav.php");
			}
		?>
		<script src="<?php echo $urlBASE; ?>js/swiper.min.js"></script>
		<script src="<?php echo $urlBASE; ?>js/firebase.js"></script>
		<script src="<?php echo $urlBASE; ?>js/app.js"></script>
	</body>
</html>
