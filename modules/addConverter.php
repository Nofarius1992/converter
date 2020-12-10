<?php 
    include $_SERVER['DOCUMENT_ROOT'] .'/function/function.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/config/config.php';
    include $_SERVER['DOCUMENT_ROOT'] .'/config/default.php';

    $sql = "SELECT * FROM settings";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
 ?>
<form id='convert' action="http://converter.local/modules/apiConverter.php" method="POST">
    <div class="wrapperFlex">
        <div class="primaryCurrency">
            <h3>Имеющаяся валюта</h3>

            <?php 
                if ($row['uahCheckbox'] == 1) {
                    ?>
                        <label for="primaryUah">
                            <p><input id='primaryUah' name="primaryCurrency" type="radio" value="UAH"> UAH </p>
                        </label>
                    <?php
                }

                if ($row['usdCheckbox'] == 1) {
                    ?>
                        <label for="primaryUsd">
                            <p><input id='primaryUsd' name="primaryCurrency" type="radio" value="USD"> USD </p>
                        </label>
                    <?php
                }

                if ($row['eurCheckbox'] == 1) {
                    ?>
                        <label for="primaryEur">
                            <p><input id='primaryEur' name="primaryCurrency" type="radio" value="EUR"> EUR </p>
                        </label>
                    <?php
                }

                if ($row['rurCheckbox'] == 1) {
                    ?>
                        <label for="primaryRur">
                            <p><input id='primaryRur' name="primaryCurrency" type="radio" value="RUR"> RUR </p>
                        </label>
                    <?php
                }
             ?>
        </div>

        <div class="secondaryCurrency">
            <h3>Нужная валюта</h3>

            <?php 
                if ($row['uahCheckbox'] == 1) {
                    ?>
                        <label for="secondaryUah">
                            <p><input id='secondaryUah' name="secondaryCurrency" type="radio" value="UAH"> UAH </p>
                        </label>
                    <?php
                }

                if ($row['usdCheckbox'] == 1) {
                    ?>
                        <label for="secondaryUsd">
                            <p><input id='secondaryUsd' name="secondaryCurrency" type="radio" value="USD"> USD </p>
                        </label>
                    <?php
                }

                if ($row['eurCheckbox'] == 1) {
                    ?>
                        <label for="secondaryEur">
                            <p><input id='secondaryEur' name="secondaryCurrency" type="radio" value="EUR"> EUR </p>
                        </label>
                    <?php
                }

                if ($row['rurCheckbox'] == 1) {
                    ?>
                        <label for="secondaryRur">
                            <p><input id='secondaryRur' name="secondaryCurrency" type="radio" value="RUR"> RUR </p>
                        </label>
                    <?php
                }
             ?>
        </div>
    </div>
    



    <div class="countCurrency">
        <input name="coutnCurrency" type="text">
        <button type="submit">Конвертировать</button>
    </div>
</form>

