<?php 

    define('title', 'PG - Wcięcie liniowe');
    include('../includes/header.php');

?>

<script type="text/javascript" src="../scripts/wciecie-liniowe.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator wcięcię liniowe</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">
            
            <div class="main-elem border post-item" style="background-color: #c2873f;"><div style="color: #8fe835;margin-right: 10px;">100.00</div><div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div></div>

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>A</sub></label>
            <input type="number" name="XA" id="XA" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>A</sub></label>
            <input type="number" name="YA" id="YA" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>B</sub></label>
            <input type="number" name="XB" id="XB" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>B</sub></label>
            <input type="number" name="YB" id="YB" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Odległość<sub>a</sub></label>
            <input type="number" name="distance-a" id="distance-a" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Odległość<sub>b</sub></label>
            <input type="number" name="distance-b" id="distance-b" class="calc-form-area">

            <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="linearIndentation()">
            <div id="result"></div>

        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>