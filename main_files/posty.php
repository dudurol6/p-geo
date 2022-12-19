<?php

    define('title', 'PG - Posty');
    include('../includes/header.php');

?>

<main>

    <div class="main-welcome-text">Posty</div>
    <div class="main-box">

		<div class="main-elem column bg border">
			
			<a class="main-a" href="post.php?post=czym_jest_geodezja">
                <div class="main-elem column border post-item">1 - Czym jest geodezja</div>
            </a>
			<a class="main-a" href="#">
                <div class="main-elem column border post-item temp-text"><strike>2 - Uprawnienia zawodowe</strike></div>
            </a>
			<a class="main-a" href="#">
                <div class="main-elem column border post-item temp-text"><strike>3 - Jednostki w geodezji</strike></div>
            </a>
			<a class="main-a" href="#">
                <div class="main-elem column border post-item temp-text"><strike>4 - Sprzęt używany do pomiarów</strike></div>
			</a>
			
		</div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>