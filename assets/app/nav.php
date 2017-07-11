<nav class="bottom">
    <ul class="actif-<?php if(isset($idMenu)) echo $idMenu;?>">
        <li><a href="#">Borne</a></li>
        <li><a href="#">Achats</a></li>
        <li><a href="#">Profil</a></li>
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
            $("body .container").replaceWith(data);
            $(".loader").fadeOut(500);

            if(menuActif == 1){
                var results = firebase.database().ref('morseArduino/').once("value", function(snapshot) {
                   var exists = (snapshot.val() !== null);
                   console.log(snapshot.val())

                   if(snapshot.val() == 1){
                       $("#unlink").hide();
                       $("#link").show();
                   }
                   else{
                       $("#unlink").show();
                       $("#link").hide();
                   }
                });
            }

        });
    });
</script>
