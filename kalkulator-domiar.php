<?php 

    define('title', 'PG - Metoda ortogonalna');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/domiar.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator punkt na domiarze</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">

            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT" style="width: 100%; color: #e6e6e6; font-size: 16px;">Puste pole oznacza "0.00"</div>
            </div>

            <div class="main-elem row">

                <div class="in-elem description-image" id="orthogonalmethod"></div>

                <div class="in-elem column">
                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>pocz</sub></label>
                    <input type="number" name="coord-Xbeg" id="coord-Xbeg" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>pocz</sub></label>
                    <input type="number" name="coord-Ybeg" id="coord-Ybeg" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>końc</sub></label>
                    <input type="number" name="coord-Xend" id="coord-Xend" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>końc</sub></label>
                    <input type="number" name="coord-Yend" id="coord-Yend" class="calc-form-area">

                    <br><div class="sep-line"></div>

                    <label for="number" class="calc-form-area-label">Miara bieżąca</label>
                    <input type="number" name="current" id="current" class="calc-form-area">

                    <label for="number" class="calc-form-area-label" style="margin-bottom: 5px;">Domiar<br><sub> (+) prawy | (-) lewy</sub></label>
                    <input type="number" name="offset" id="offset" class="calc-form-area">

                    <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="offset()">
                    <div id="result"></div>
                </div>

            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>