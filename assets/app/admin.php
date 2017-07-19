<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    if($_SESSION['auth'] > 1){
        $action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : "";
        switch ($action) {
            case 'opus':
            ?>
                <p><a href="?page=admin">Retour à l'admin</a></p>
                - Ajouter une oeuvre
            <?php
            break;

            default:
                ?>
                <ul class="black-list">
                    <li><a href="?page=admin&action=opus">Gérer les oeuvres</a></li>
                    <li><a href="?page=admin&action=opus">Gérer les produits</a></li>
                    <li><a href="?page=admin&action=members">Gérer les membres</a></li>
                </ul>
                <?php
            break;
        }
        ?>

        <?php
    }
    else{
        echo "Une erreur s'est produite";
    }
?>
