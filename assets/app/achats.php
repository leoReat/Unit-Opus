<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<div id="product-slide" class="swiper-container" <?php if(isset($_GET['id'])) echo 'data-id="'.intval($_GET['id']).'"';?>>
    <div class="swiper-wrapper"></div>
</div>
