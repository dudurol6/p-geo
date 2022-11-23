<?php 

    define('title', 'PG - Metoda ortogonalna');
    include('../includes/header.php');

?>

<script type="text/javascript" src="../scripts/domiar.js"></script>

<main>

    <div class="main-welcome-text">Kalkulator punkt na domiarze</div>
    <div class="main-box">

        <div class="main-elem column bg border">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>pocz</sub></label>
            <input type="number" name="coord-Xbeg" id="coord-Xbeg" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>pocz</sub></label>
            <input type="number" name="coord-Ybeg" id="coord-Ybeg" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>końc</sub></label>
            <input type="number" name="coord-Xend" id="coord-Xend" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>końc</sub></label>
            <input type="number" name="coord-Yend" id="coord-Yend" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Miara bieżąca</label>
            <input tYPe="number" name="current" id="current" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Domiar<br><sub> (+) prawy | (-) lewy</sub></label>
            <input tYPe="number" name="offset" id="offset" class="calc-form-area">


            <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="offset()">
            <div id="result"></div>

        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>