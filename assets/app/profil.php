<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<div class="container" id="container">
    Bonjour <?php echo $_SESSION['username']; ?>,<br />
    Ceci est ton profil
</div>
