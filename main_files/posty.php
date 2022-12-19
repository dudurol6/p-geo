<?php

    define('title', 'PG - Posty');
    include('../includes/header.php');

?>

<main>

    <div class="main-welcome-text">Posty</div>
    <div class="main-box">

		<div class="box main-elem column bg border">
			
			<a class="post-a" href="post.php?post=czym_jest_geodezja">
                <div class="main-elem column border post-item">1 - Czym jest geodezja</div>
            </a>
			<a class="post-a" href="post.php?post=uprawnienia_zawodowe">
                <div class="main-elem column border post-item">2 - Uprawnienia zawodowe</div>
            </a>
			<a class="post-a" href="post.php?post=jednostki_w_geodezji">
                <div class="main-elem column border post-item">3 - Jednostki w geodezji</div>
            </a>
			<a class="post-a" href="post.php?post=sprzet_w_geodezji">
                <div class="main-elem column border post-item">4 - Sprzęt używany do pomiarów</div>
			</a>
			
		</div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>