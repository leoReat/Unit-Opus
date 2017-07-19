<nav class="bottom">
    <ul class="actif-<?php if(isset($idMenu)) echo $idMenu;?>">
        <li><a href="#"><img src="<?php echo $urlBASE; ?>images/app/scan.png" title="Scanner une oeuvre" /></a></li>
        <li><a href="#"><img src="<?php echo $urlBASE; ?>images/app/list.png" title="Voir la liste des produits" /></a></li>
        <li><a href="#"><img src="<?php echo $urlBASE; ?>images/app/user.png" title="Mes paramètres" /></a></li>
    </ul>
</nav>
<script type="text/javascript">
    function changePage(menuActif){
        $(".apploader").show();
        $("nav ul").removeClass();
        var followMenu = menuActif;
        if(menuActif == 4 || menuActif == 5) followMenu = 2;
        $("nav ul").addClass("actif-"+followMenu);

        var url = "app.php"
        if(followMenu == 2) url = "?page=achats";
        if(followMenu == 3) url = "?page=profil";

        console.log(followMenu, url)

        var page = "QRcode";
        if(menuActif == 2) page = "achats.php";
        if(menuActif == 3) page = "profil.php";
        if(menuActif == 4) page = "panier.php";
        if(menuActif == 5) page = "achats.php?id=1";

        if(menuActif == 1){
            $.get( "assets/app/header.php",
            function( data ) {
                $("header").replaceWith(data);
            });
        }
        else{
            $.post( "assets/app/header-title.php", { title: page},
            function( data ) {
                $("header").replaceWith(data);
            });
        }

        $.get( "assets/app/"+page, function( data ) {
            console.log(data)
            $("body .container").html(data);

            if(menuActif == 2 || menuActif == 5) launchProductList();
            else if(menuActif == 4) launchCheckout();
            // else if(menuActif == 4) launchOpus();
            else $(".apploader").fadeOut(800);

            $(".app header.title h1 a").attr("href", url)

        });
    }
    $("nav ul li a").click(function(e){
        e.preventDefault();
        var menuActif = $(this).parent().index() + 1;

        changePage(menuActif);
    });
</script>
