<?php 
include $_SERVER['DOCUMENT_ROOT'] .'/config/config.php';
	// Создаем в базе данных чекбоксы для валют
	$sql = "SELECT * FROM settings";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

	    // Проверям нет ли уже записей в базе данных
    if($row == null) {
    	$sql = "INSERT INTO `settings` (`id`, `uahCheckbox`, `usdCheckbox`, `eurCheckbox`, `rurCheckbox`, `countHistory`) VALUES (NULL, '1', '1', '1', '1', '5')";
    	$result = $conn->query($sql);
    }
 ?>