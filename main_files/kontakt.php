<?php

    define('title', 'Kontakt');
    include('../includes/header.php');

?>

<main>

    <div class="main-welcome-text">Kontakt</div>
    <div class="main-box" style="flex-direction:column;justify-content:center;align-items:center;">

    <a><div class="main-elem w50 column me-image" style="cursor:default;">Maciej Dudkowski</div></a><br>
        <div class="main-elem w100 row wrap">
            <a class="contact-itemA" href="https://www.facebook.com/maciejdudkowski.33" target="_blank"><div class="main-elem w30 contact-item" id="facebook-elem">
                <i class="demo-icon icon-facebook iconfont"></i>
            </div></a>
            <a class="contact-itemA" href="https://www.instagram.com/dudeq_6/" target="_blank"><div class="main-elem w30 contact-item" id="instagram-elem">
                <i class="demo-icon icon-instagram iconfont"></i>
            </div></a>
            <a class="contact-itemA" href="mailto:dudurol66@gmail.com"><div class="main-elem w30 contact-item" id="mail-elem">
                <i class="demo-icon icon-mail iconfont"></i>
            </div></a>
        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>