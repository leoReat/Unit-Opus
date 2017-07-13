<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $urlBASE; ?>css/app.css">
</head>
<nav class="bottom">
    <ul>
        <li class="active"><a href="#"><img src="../../images/scan.png" style="width: 26%"></a></li>
        <li><a href="#"><img src="../../images/catalogue.png" style="width: 35%"></a></li>
        <li><a href="#"><img src="../../images/user.png" style="width: 30%"></a></li>
    </ul>
</nav>
<script type="text/javascript">
    $("nav ul li a").click(function(e){
        e.preventDefault();
        $(".loader").show();
        var menuActif = $(this).parent().index() + 1;
        $("nav ul").removeClass();
        $("nav ul").addClass("actif-"+menuActif);

         var page = "QRcode";

        if(menuActif == 2) page = "achats";
        if(menuActif == 3) page = "profil";

        $(".container").hide();
        $.get( "assets/app/"+page+".php", function( data ) {
            $("body").prepend(data);
            $(".loader").fadeOut(500);
        });
    });
</script>
