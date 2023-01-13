<?php 

    define('title', 'PG - Kąt ze współrzędnych');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/kat-ze-wspolrzednych.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator kąt ze współrzędnych</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">
            
            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT" style="width: 100%; color: #e6e6e6; font-size: 16px;">Puste pole oznacza "0.00"</div>
            </div>

            <div class="main-elem row">

                <div class="in-elem description-image" id="anglefromcoordinates"></div>

                <div class="in-elem column">
                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>L</sub></label>
                    <input type="number" name="coord-XL" id="coord-XL" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>L</sub></label>
                    <input type="number" name="coord-YL" id="coord-YL" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>P</sub></label>
                    <input type="number" name="coord-XP" id="coord-XP" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>P</sub></label>
                    <input type="number" name="coord-YP" id="coord-YP" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>C</sub></label>
                    <input type="number" name="coord-XC" id="coord-XC" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>C</sub></label>
                    <input type="number" name="coord-YC" id="coord-YC" class="calc-form-area">

                    <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="angleFromCoordinates()">
                    <div id="result"></div>
                </div>

            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>