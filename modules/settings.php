<?php 
    include $_SERVER['DOCUMENT_ROOT'] ."/header.php";
    include $_SERVER['DOCUMENT_ROOT'] ."/config/config.php";
    include $_SERVER['DOCUMENT_ROOT'] ."/function/function.php";
 ?>
<div class="wrapper">
    <h3>Какие валюты включить?</h3>
    <form action="../config/checkbox.php" method="POST">
        <label for="UAH">
            <p><input id='UAH' name="UAH" type="checkbox" value="UAH"> UAH </p>
        </label>

        <label for="USD">
            <p><input id='USD' name="USD" type="checkbox" value="USD"> USD </p>
        </label>

        <label for="EUR">
            <p><input id='EUR' name="EUR" type="checkbox" value="EUR"> EUR </p>
        </label>

        <label for="RUR">
            <p><input id='RUR' name="RUR" type="checkbox" value="RUR"> RUR </p>
        </label>

        <h3>Максимальное кол-во последних запросов:</h3>
        <label for="count">

            <input id="count" name='count' type="number" value="5"> 
        </label>
        

        <p><input type="submit" value="Сохранить"></p>
    </form>

    <a href="/">На Главную</a>
</div>
    