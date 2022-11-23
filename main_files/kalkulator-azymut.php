<?php 

    define('title', 'PG - Azymut');
    include('../includes/header.php');

?>

<script type="text/javascript" src="../scripts/azymut.js"></script>

<main>

    <div class="main-welcome-text">Kalkulator Azymut</div>
    <div class="main-box">

        <div class="main-elem column bg border">
            
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

</main>

<?php include('../includes/footer.php'); ?>