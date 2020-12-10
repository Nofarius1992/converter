<?php 
    include $_SERVER['DOCUMENT_ROOT'] ."/header.php";
	include $_SERVER['DOCUMENT_ROOT'] .'/config/config.php';
    
    // Показывать или не показывать валюту в коневертере (запись в базу данных settings)
    if(!isset($_POST['UAH'])) {
        $sql = "UPDATE `settings` SET `uahCheckbox` = '0'";
        $result = $conn->query($sql);
    } else {
        $sql = "UPDATE `settings` SET `uahCheckbox` = '1'";
        $result = $conn->query($sql);
    }

    if(!isset($_POST['USD'])) {
        $sql = "UPDATE `settings` SET `usdCheckbox` = '0'";
        $result = $conn->query($sql);
    } else {
        $sql = "UPDATE `settings` SET `usdCheckbox` = '1'";
        $result = $conn->query($sql);
    }

    if(!isset($_POST['EUR'])) {
        $sql = "UPDATE `settings` SET `eurCheckbox` = '0'";
        $result = $conn->query($sql);
    } else {
        $sql = "UPDATE `settings` SET `eurCheckbox` = '1'";
        $result = $conn->query($sql);
    }

    if(!isset($_POST['RUR'])) {
        $sql = "UPDATE `settings` SET `rurCheckbox` = '0'";
        $result = $conn->query($sql);
    } else {
        $sql = "UPDATE `settings` SET `rurCheckbox` = '1'";
        $result = $conn->query($sql);
    }

    if($_POST['count']) {
        $sql = "UPDATE `settings` SET `countHistory` = '" . $_POST['count'] . "'";
        $result = $conn->query($sql);
    } 


?>
<div class="wrapper">
    <p>Настройки сохранены</p>
    <p><a href="/">На Главную</a></p>
</div>

