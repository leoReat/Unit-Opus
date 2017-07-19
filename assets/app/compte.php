<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<form method="POST" class="form-register compte">
    <p class="pform form-name">
        <label for="name">Entre 3 et 25 caractères</label>
        <input type="text" name="name" id="name" value="<?php echo $_SESSION['username']; ?>" class="button" placeholder="Nom d'utilisateur">
    </p>
    <p class="pform form-mail">
        <label for="mail">Format incorrect</label>
        <input type="email" name="mail" id="mail" value="<?php echo $_SESSION['mail']; ?>" class="button" placeholder="Adresse mail">
    </p>
    <p class="pform form-mdp">
        <label for="mdp">Entre 3 et 25 caractères</label>
        <input type="password" name="mdp" id="mdp" value="" class="button" placeholder="Mot de passe">
    </p>
    <p class="pform form-tel">
        <label for="tel">Format incorrect</label>
        <input type="tel" maxlength="10" name="tel" id="tel" value="<?php echo $_SESSION['tel']; ?>" class="button" placeholder="Numéro de téléphone">
    </p>
    <label for="" id="mail-already">Ce mail est déjà réservé.</label>
    <button type="submit" name="button" class="button blue">Enregistrer les modifications</button>
</form>
