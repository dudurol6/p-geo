<?php 

    define('title', 'PG - Kąt ze współrzędnych');
    include('../includes/header.php');

?>

<script type="text/javascript" src="../scripts/kat-ze-wspolrzednych.js"></script>

<main>

    <div class="main-welcome-text">Kalkulator kąt ze współrzędnych</div>
    <div class="main-box">

        <div class="main-elem column bg border">
            
            <label for="number" class="calc-form-area-label">Współrzędna X<sub>L</sub></label>
            <input type="number" name="coord-XL" id="coord-XL" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>L</sub></label>
            <input type="number" name="coord-YL" id="coord-YL" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>P</sub></label>
            <input type="number" name="coord-XP" id="coord-XP" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>P</sub></label>
            <input tYPe="number" name="coord-YP" id="coord-YP" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>C</sub></label>
            <input type="number" name="coord-XC" id="coord-XC" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>C</sub></label>
            <input type="number" name="coord-YC" id="coord-YC" class="calc-form-area">


            <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="angleFromCoordinates()">
            <div id="result"></div>

        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>