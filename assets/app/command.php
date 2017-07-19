<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : "";
    switch ($action) {
        case 'opus':
        ?>
            <h1>L'achat a bien été effectué !</h1>
        <?php
        break;

        default:
            ?>
            <form method="POST" action="?page=command&action=opus">
                <p class="pform form-name">
                    <label for="name">Entre 3 et 25 caractères</label>
                    <input type="text" name="name" id="name" value="<?php echo $_SESSION['username']; ?>" class="button" placeholder="Nom d'utilisateur">
                </p>

                <p class="pform form-country">
                    <input type="text" maxlength="10" name="adress" id="country" value="France" class="button" placeholder="Pays">
                </p>
                <p class="pform form-adresse">
                    <input type="text" maxlength="10" name="adress" id="adress" value="" class="button" placeholder="Adresse complète">
                </p>

                <p class="pform form-city">
                    <input type="text" maxlength="10" name="adress" id="city" value="" class="button" placeholder="Ville">
                </p>

                <p class="pform form-postal">
                    <input type="text" maxlength="10" name="adress" id="postal" value="" class="button" placeholder="Code Postal">
                </p>

                <p class="pform form-tel">
                    <label for="tel">Format incorrect</label>
                    <input type="tel" maxlength="10" name="tel" id="tel" value="<?php echo $_SESSION['tel']; ?>" class="button" placeholder="Numéro de téléphone">
                </p>
                <label for="" id="mail-already">Ce mail est déjà réservé.</label>
                <button type="submit" name="button" class="button blue">Valider mes informations</button>
            </form>

            <?php
        break;
    }



?>
