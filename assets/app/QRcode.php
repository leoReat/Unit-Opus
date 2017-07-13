<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<div class="container white-bloc">
    <div id="unlink">
        <img src="<?php echo $urlBASE; ?>images/app/qrcode.png" alt="Borne" title="Branchez votre téléphone à une borne !" id="qrcode"/>
        <p>Connectez votre portable aux différentes bornes.</p>
    </div>

    <div id="link" style="display:none;">
        <img src="<?php echo $urlBASE; ?>images/app/scan-ok.png" alt="Borne" title="Branchez votre téléphone à une borne !" id="qrcode"/>
        <p>Votre oeuvre a bien été enregistré !</p>

        <a href="#">Voir l’oeuvre <span>></span></a>
    </div>
</div>
<?php require "nav.php" ?>