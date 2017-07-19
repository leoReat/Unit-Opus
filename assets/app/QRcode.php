<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<div id="unlink">
    <img src="<?php echo $urlBASE; ?>images/app/qrcode.png" alt="Borne" title="Branchez votre téléphone à une borne !" id="qrcode"/>
    <p>Rapprochez-vous d'une oeuvre et cliquez sur l'icône ci-dessus !</p>
</div>

<div id="link" style="display:none;">
    <img src="<?php echo $urlBASE; ?>images/app/scan-ok.png" alt="Borne" title="Branchez votre téléphone à une borne !" id="qrcode"/>
    <p>Votre oeuvre a bien été enregistrée !</p>
</div>


<script type="text/javascript">
$("#unlink").click(function(){
    if(typeof($datasUser.opus) == "undefined") return ;

    var opus = 1;

    $("#unlink").hide();
    $("#link").show().append('<a href="?page=opus&id='+opus+'">Voir l’oeuvre <span>></span></a>');

    var oeuvres = Object.keys($datasUser.opus);
    var exists = 0;
    for(var i=0; i < oeuvres.length; i++) {
        if(opus == $datasUser.opus[oeuvres[i]]){
            exists == 1;
            return;
        }
    }

    if(!exists) firebase.database().ref('users/' + $userId+"/opus").push(opus);
});
</script>
