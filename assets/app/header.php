<header>
        <h1>
            <a href="#">
                <img src="<?php echo $urlBASE; ?>images/logo-blanc.png" alt="Logo Opus" id="logo" title="Logo de l'application Opus"/>
             </a>
        </h1>

        <form method="POST">
            <select class="lang" name="lang">
                <option value="fr"<?php echo ($lang == "fr") ? " selected" : ""; ?>>Français</option>
                <option value="en"<?php echo ($lang == "en") ? " selected" : ""; ?>>Anglais</option>
                <option value="it"<?php echo ($lang == "it") ? " selected" : ""; ?>>Italien</option>
            </select>
        </form>
</header>

