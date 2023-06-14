<?php 

    define('title', 'PG - Pole powierzchni');
    include('includes/header.php');

?>

<script type="text/javascript" src="scripts/pole.js"></script>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text">Kalkulator Pole powierzchni</div>
    <a class="post-a" href="strona-glowna.php" style="margin-bottom: 20px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

        <div class="box main-elem column bg border">

            <div class="main-elem border post-item" style="background-color: #c2873f; justify-content: center;">
                <div style="color: #8fe835;margin-right: 10px;">100.00</div>
                <div style="color: #fa4141;margin-left: 10px;"><strike>100,00</strike></div>
                <div class="upperTXT smluppercase" style="width: 100%">Puste pole oznacza "0.00"</div>
            </div>
            <!----------------------------------------------------->
            <script>const appType = 'surfaceAreaHistory';</script>
            <?php include('includes/calculation-history.php'); ?>
            <!----------------------------------------------------->
            <div class="main-elem row" id="row>column"> <!-- 1 -->

                <div class="in-elem description-image" id="surfaceArea"></div>
                
                <div class="in-elem column" id="polCalcArea"> <!-- 2 -->

                    <label for="coordNo" class="calc-form-area-label">Ile punktów</label>
                    <input type="number" name="coordNo" id="coordNo" class="calc-form-area">

                    <input type="submit" name="submit" value="Dalej" class="calc-form-submit-button" onclick="surfaceArea('num')">
                    <div id="result"></div>

                </div>

            </div>

        </div>

    </div>

</main>

<?php include('includes/footer.php'); ?>