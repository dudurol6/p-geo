<?php 

    define('title', 'PG - Azymut');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/azymut.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator Azymut</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">

            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT" style="width: 100%; color: #e6e6e6; font-size: 16px;">Puste pole oznacza "0.00"</div>
            </div>

            <div class="main-elem row"> <!-- 1 -->

                <div class="in-elem description-image" id="azimuth"></div>
                
                <div class="in-elem column"> <!-- 2 -->
                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>1</sub></label>
                    <input type="number" name="coord-X1" id="coord-X1" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>1</sub></label>
                    <input type="number" name="coord-Y1" id="coord-Y1" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>2</sub></label>
                    <input type="number" name="coord-X2" id="coord-X2" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>2</sub></label>
                    <input type="number" name="coord-Y2" id="coord-Y2" class="calc-form-area">

                    <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="azimuth()">
                    <div id="result"></div>

                </div>

            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>