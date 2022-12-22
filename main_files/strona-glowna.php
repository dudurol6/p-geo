<?php

    define('title', 'Przystanek Geodezja');
    include('../includes/header.php');

?>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Strona Główna</div>
    <div class="main-box">

        <div class="box main-elem column bg border">

            <div class="main-in-header">Programy kalkulacyjne</div>
            <div class="main-in-line"></div>

            <div class="main-elem row wrap">
                <a class="main-a" href="kalkulator-azymut.php">
                    <div class="main-elem column border calculation-apps-images" id="azimuth">Azymut</div>
                </a>
                <a class="main-a" href="kalkulator-katzewspolrzednych.php">
                    <div class="main-elem column border calculation-apps-images" id="anglefromcoordinates">Kąt ze <br><br> współrz.</div>
                </a>
                <a class="main-a" href="kalkulator-domiar.php">
                    <div class="main-elem column border calculation-apps-images" id="orthogonalmethod">Domiar prostokąt.</div>
                </a>
                <a class="main-a" href="kalkulator-biegunowa.php">
                    <div class="main-elem column border calculation-apps-images" id="polarmethod">Metoda biegunowa</div>
                </a>
                <a class="main-a" href="kalkulator-wcieciekatowe.php">
                    <div class="main-elem column border calculation-apps-images" id="angularindentation">Wcięcie kątowe</div>
                </a>
                <a class="main-a" href="kalkulator-wciecieliniowe.php">
                    <div class="main-elem column border calculation-apps-images" id="linearindentation">Wcięcie liniowe</div>
                </a>
                
            </div>

        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>