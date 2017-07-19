<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $idOpus = isset($_GET['id']) ? intval($_GET['id']) : "";

    if($idOpus == 1){
        ?>
            <div id="opus" data-id="<?php echo $idOpus;?>">
            </div>
        <?php
    }

?>
