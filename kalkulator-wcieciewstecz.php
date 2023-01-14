<?php 

    define('title', 'PG - Wcięcie wstecz');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/wciecie-wstecz.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator wcięcię wstecz</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">
            
            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT" style="width: 100%; color: #e6e6e6; font-size: 16px;">Puste pole oznacza "0.00"</div>
            </div>
            
            <div class="main-elem row">

                <div class="in-elem description-image" id="backindentation"></div>

                <div class="in-elem column">
                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>A</sub></label>
                    <input type="number" name="XA" id="XA" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>A</sub></label>
                    <input type="number" name="YA" id="YA" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Kierunek do A</label>
                    <input type="number" name="dir-A" id="dir-A" class="calc-form-area">

                    <br><div class="sep-line"></div>

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>B</sub></label>
                    <input type="number" name="XB" id="XB" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>B</sub></label>
                    <input type="number" name="YB" id="YB" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Kierunek do B</label>
                    <input type="number" name="dir-B" id="dir-B" class="calc-form-area">

                    <br><div class="sep-line"></div>

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>C</sub></label>
                    <input type="number" name="XB" id="XC" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>C</sub></label>
                    <input type="number" name="YB" id="YC" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Kierunek do C</label>
                    <input type="number" name="dir-C" id="dir-C" class="calc-form-area">

                    <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="backIndentation()">
                    <div id="result"></div>  
                </div>

            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>