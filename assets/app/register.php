<div class="container">

    <a href="app.php" title="Retour à l'accueil"><img src="<?php echo $urlBASE; ?>images/app/back.png" alt="Retour à l'accueil" class="back"/></a>
    <form action="<?php echo $urlAPP; ?>login" method="POST" class="form-register">
        <h1><img src="<?php echo $urlBASE; ?>images/app/photo.png" alt="Image perso" id="logo" /></h1>
        <p class="pform form-name">
            <label for="name">Entre 3 et 25 caractères</label>
            <input type="text" name="name" id="name" value="" class="button" placeholder="Nom d'utilisateur">
        </p>
        <p class="pform form-mail">
            <label for="mail">Format incorrect</label>
            <input type="email" name="mail" id="mail" value="" class="button" placeholder="Adresse mail">
        </p>
        <p class="pform form-mdp">
            <label for="mdp">Entre 3 et 25 caractères</label>
            <input type="password" name="mdp" id="mdp" value="" class="button" placeholder="Mot de passe">
        </p>
        <p class="pform form-tel">
            <label for="tel">Format incorrect</label>
            <input type="tel" maxlength="10" name="tel" id="tel" value="" class="button" placeholder="Numéro de téléphone">
        </p>
        <label for="" id="mail-already">Ce mail est déjà réservé.</label>
        <button type="submit" name="button" class="button blue">Créer un compte</button>
    </form>

</div>

<div class="bottom">
	<p>Vous avez déjà un compte ? <a href="<?php echo $urlAPP; ?>login">Se connecter</a></p>
</div>

<script type="text/javascript">
    var photo = sessionStorage.getItem("photo");
    var nom = sessionStorage.getItem("nom");
    var mail = sessionStorage.getItem("mail");
    if(photo) $("#logo").attr("src", photo);
    if(nom) $("input[type='text']").val(nom);
    if(mail) $("input[type='email']").val(mail);
</script>
