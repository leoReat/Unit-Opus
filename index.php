<?php
require_once("assets/config.php");
?>
<!doctype html>
<head>
    <title>OPUS - Digitalisez votre musée</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/museum.css">
    <link rel="icon" type="image/png" href="<?php echo $urlBASE; ?>images/favicon.png"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Opus, musée, digital">
    <meta name="description" content="Opus est une solution innovante de digitalisation des musées et galeries."/>
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

</head>
<body class="museum">
<header>
    <nav>
        <h1>
            <a href="#" class="home no-mobile">
                <img src="<?php echo $urlBASE; ?>images/logo-blanc.png" alt="Logo Opus" id="logo"
                     title="Logo de l'application Opus"/>
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


<main id="panel-container">

    <article class="concept" id="panel1">
       <div class="center">
           <h2>Opus<br>La boutique digitale pour musée</h2>
           <h3>Procurez-vous des  souvenirs, tout en préservant les œuvres</h3>
           <a href="" class="button">Découvrir Opus <img src="<?php echo $urlBASE; ?>images/arrow-blue.svg" alt=""></a>
       </div>
    </article>

    <article class="concept content" id="panel2">
        <div class="center">
            <h2>Admirez la Joconde au musée.</h2>
            <p>Vous flashez sur une oeuvre lors de votre visite au musée ? Pourquoi ne pas la ramener chez vous ?</p>
        </div>
    </article>

    <article class="concept content" id="panel3">
        <div class="center">
            <h2>Scannez-la grâce à Opus.</h2>
            <p>À l’aide de votre smartphone, Opus détecte l’oeuvre qui vous a tapé dans l’oeil lorsque vous êtes à proximité de celle-ci.</p>
        </div>
    </article>

    <article class="concept content" id="panel4">
        <div class="center">
            <h2>Naviguez dans un catalogue spécifique à l’œuvre.</h2>
            <p>Une fois l’oeuvre scannée, un catalogue de souvenirs dédié est mis à votre disposition.</p>
        </div>
    </article>

    <article class="concept content" id="panel5">
        <div class="center">
            <h2>Faites votre sélection en toute tranquillité.</h2>
            <p>Ajoutez les souvenirs à votre panier et commandez depuis l’application, sans passer par la boutique physique du musée.</p>
        </div>
    </article>

    <article class="concept content" id="panel6">
        <div class="center">
            <h2>Retrouvez-la chez vous.</h2>
            <p>En un clin d’oeil vos achats sont livrés chez vous. Fini la foule, les files d’attente et les bras chargés !</p>
        </div>
    </article>

    <article class="footer concept" id="panel7">
        <footer>
            <div id="contact">
                <h2>Vivez l'expérience,<br> rejoignez-nous sur les réseaux sociaux.</h2>
                <ul class="social">
                    <li><a href="https://www.facebook.com/GetOpusApp" target="_BLANK"><img
                                    src="<?php echo $urlBASE; ?>images/fb.png" alt="lien facebook opus"
                                    title="redirection facebook"/></a></li>
                    <li><a href="https://twitter.com/GetOpus" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/tw.png"
                                                                                   alt="lien twitter opus"
                                                                                   title="redirection twitter"/></a></li>
                    <li><a href="https://www.instagram.com/getopusapp/" target="_BLANK"><img
                                    src="<?php echo $urlBASE; ?>images/insta.png" alt="lien instagram opus"
                                    title="redirection instagram"/></a></li>
                    <!-- <li><a href="" target="_BLANK"><img src="images/yt.png" /></a></li> -->
                    <!-- <li><a href="https://www.linkedin.com/in/opus-app-67347b145/" target="_BLANK"><img src="images/lkd.png" /></a></li> -->
                    <li><a href="http://m.me/GetOpusApp" target="_BLANK"><img src="<?php echo $urlBASE; ?>images/messenger.png"
                                                                              alt="live chat messenger avec Opus"
                                                                              title="discussion opus"/></a></li>
                </ul>

                <h3>Vous êtes professionnel ?</h3>
                <a href="/pro" class="button">En savoir plus</a>

            </div>
            <p>Opus - <?php echo COPYRIGHT; ?> © 2017</p>
            <p><a href=""><?php echo MENTIONS; ?></a></p>
        </footer>
    </article>

    <p id="navigation"><a href='#panel1'>•</a> <a href='#panel2'>•</a> <a href='#panel3'>•</a> <a href='#panel4'>•</a> <a href='#panel5'>•</a> <a href='#panel6'>•</a></p>
    <div class="bottom">
        <div class="arrow"></div>
    </div>

    <!--<div class="" id="artwork"></div>
    <div class="" id="artwork-detail"></div> -->
</main>




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
        function (event) {
            cookieChoices.showCookieConsentBar('<?php echo COOKIES; ?>', '<?php echo COOKIES_AGREE; ?>', '<?php echo COOKIES_LEARN; ?>', "http://get-opus.fr", '<?php echo COOKIES2; ?>');

            $("footer p:nth-of-type(2) a, .overlay, button.close, #cookieChoiceInfo a:nth-of-type(1)").click(function (e) {
                e.preventDefault();
                $(".modal, .overlay").fadeToggle(300);
                $("body").toggleClass("no-scroll");
            });
        });
</script>

<script src="<?php echo $urlBASE; ?>js/museum.js"></script>

</body>
</html>
