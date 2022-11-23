<?php 

    define('title', 'PG - Metoda biegunowa');
    include('../includes/header.php');

?>

<script type="text/javascript" src="../scripts/biegunowa.js"></script>

<main>

    <div class="main-welcome-text">Kalkulator punkt metodą biegunową</div>
    <div class="main-box">

        <div class="main-elem column bg border">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>S</sub></label>
            <input type="number" name="coord-Xstation" id="coord-Xstation" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>S</sub></label>
            <input type="number" name="coord-Ystation" id="coord-Ystation" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna X<sub>N</sub></label>
            <input type="number" name="coord-Xreference" id="coord-Xreference" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Współrzędna Y<sub>N</sub></label>
            <input type="number" name="coord-Xreference" id="coord-Yreference" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Kierunek do nawiązania</label>
            <input type="number" name="reference-direction" id="reference-direction" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Kierunek do punktu</label>
            <input type="number" name="point-direction" id="point-direction" class="calc-form-area">

            <label for="number" class="calc-form-area-label">Odległość do punktu</label>
            <input type="number" name="distance" id="distance" class="calc-form-area">


            <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="polar()">
            <div id="result"></div>

        </div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>