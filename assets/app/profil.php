<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<p>Bonjour <?php echo $_SESSION['username']; ?>,<br />
Ceci est ton profil.</p>

<ul class="black-list">
    <li><a href="?page=compte">Mon compte</a></li>
    <li><a href="#">Mes coordonnées</a></li>
    <li><a href="#">Mes commandes</a></li>
    <li><a href="#">Paramètres</a></li>
    <li><a href="?deconnexion=1" class="black-link">Déconnexion</a></li>
</ul>
