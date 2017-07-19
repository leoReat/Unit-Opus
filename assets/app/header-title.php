<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<header class="title">
        <h1>
            <?php
                $url = "app.php";
                if(isset($idMenu)){
                    if($idMenu == 2) $url = "?page=achats";
                    if($idMenu == 3) $url = "?page=profil";
                }
             ?>
            <a href="<?php echo $url; ?>">
                <img src="<?php echo $urlBASE; ?>images/arrow-white.svg" alt="Logo Opus" id="logo" title="Logo de l'application Opus"/>
             </a>
        </h1>
        <?php
            $namePage = array("profil" => "Mon profil", "achats" => "Mes achats", "compte" => "Mon compte", "admin" => "Back-office", "panier" => "Mon panier", "command" => "Ma commande", "opus" => "Oeuvre");
            $name = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : $fichier;
        ?>
        <h2><?php echo $namePage[$name]; ?></h2>
        <img src="<?php echo $urlBASE; ?>images/app/buy.png" title="Voir mon panier" id="buy-now"/>
        <span id="nb-product"></span>

        <script type="text/javascript">
        $("#buy-now, #nb-product").click(function(e){
            e.preventDefault();
            changePage(4);
        });

        if(typeof($datasUser) != "undefined" && typeof($datasUser.checkout) != "undefined"){
            var nbCheckout = Object.keys($datasUser.checkout).length;
            if(nbCheckout > 0) $("#nb-product").html(nbCheckout).show();
            else $("#nb-product").hide();
        }
        else $("#nb-product").hide();
        </script>

</header>
