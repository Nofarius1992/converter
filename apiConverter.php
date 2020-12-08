<?php 
	require_once 'config.php';
	require_once 'function.php';

	$coursesApi = getCourses($link); // Массив с курсами API приват банк
	print_arr($coursesApi);

	$primaryCurrency = $_POST['primaryCurrency']; // Первичная валюта
	$secondaryCurrency = $_POST['secondaryCurrency']; // Вторичная валюта
	$countMoney = $_POST['coutnCurrency'];

	$courseSecondaryCurrency = getCourseSecondaryCurrency($coursesApi, $secondaryCurrency); // Получаем курс вторичной валюты

	$convertPrimaryUAH = convertPrimaryUAH($courseSecondaryCurrency, $countMoney); // Конвертируем украинскую валюту гривны

	

 ?>