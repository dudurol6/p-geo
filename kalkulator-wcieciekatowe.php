<?php 

    define('title', 'PG - Wcięcie kątowe');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/wciecie-katowe.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator wcięcię kątowe</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">
            
            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT" style="width: 100%; color: #e6e6e6; font-size: 16px;">Puste pole oznacza "0.00"</div>
            </div>
            <!----------------------------------------------------->
            <script>const appType = 'angularIndentation';</script>
            <?php include('includes/calculation-history.php'); ?>
            <!----------------------------------------------------->
            <div class="main-elem row">

                <div class="in-elem description-image" id="angularindentation"></div>

                <div class="in-elem column">
                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>A</sub></label>
                    <input type="number" name="XA" id="XA" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>A</sub></label>
                    <input type="number" name="YA" id="YA" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna X<sub>B</sub></label>
                    <input type="number" name="XB" id="XB" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Współrzędna Y<sub>B</sub></label>
                    <input type="number" name="YB" id="YB" class="calc-form-area">

                    <br><div class="sep-line"></div>

                    <label for="number" class="calc-form-area-label">Kąt<span style="text-transform: lowercase;"><sub>&alpha;</sub></span></label>
                    <input type="number" name="angle-alpha" id="angle-alpha" class="calc-form-area">

                    <label for="number" class="calc-form-area-label">Kąt<span style="text-transform: lowercase;"><sub>&beta;</sub></span></label>
                    <input type="number" name="angle-beta" id="angle-beta" class="calc-form-area">

                    <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="angularIndentation()">
                    <div id="result"></div>
                </div>
            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>