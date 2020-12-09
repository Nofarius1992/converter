<?php 
	require_once 'config.php';
	require_once 'function.php';

	$coursesApi = getCourses($link); // Массив с курсами API приват банк

	$primaryCurrency = $_POST['primaryCurrency']; // Первичная валюта
	$secondaryCurrency = $_POST['secondaryCurrency']; // Вторичная валюта
	$countMoney = $_POST['coutnCurrency'];

	if($primaryCurrency != $secondaryCurrency) { // Проверяем не совбадают ли конвертируемые валюты
		if($countMoney) {
			// Получаем курс вторичной валюты
			$courseSecondaryCurrency = getCourseSecondaryCurrency($coursesApi, $secondaryCurrency); 
			// Получаем курс первичной валюты
			$coursePrimaryCurrency = getCoursesPrimaryCurrency($coursesApi, $primaryCurrency);

			if($primaryCurrency == 'UAH') {
				// Конвертируем украинскую валюту в зарубезную
				$convertPrimaryUAH = round (convertPrimaryUAH($courseSecondaryCurrency, $countMoney), 2);
				historyRecord($primaryCurrency, $countMoney, $secondaryCurrency, $convertPrimaryUAH, $conn);
				echo $convertPrimaryUAH;
				echo '</br>';
				echo '<a href="/">Назад</a>';
			} elseif($primaryCurrency !='UAH' && $secondaryCurrency == 'UAH') {
				// Конвертируем зарубежную валюту в гривны
				$convertSecondaryUAH = round (convertSecondaryUAH($coursePrimaryCurrency, $countMoney), 2);
				historyRecord($primaryCurrency, $countMoney, $secondaryCurrency, $convertSecondaryUAH, $conn);
				echo $convertSecondaryUAH;
				echo '</br>';
				echo '<a href="/">Назад</a>';
			} elseif($primaryCurrency !='UAH' && $secondaryCurrency != 'UAH') {
				// Конвертируем зарубежную валюту в зарубежную
				$convertForeignCurrency = round (convertForeignCurrency($coursePrimaryCurrency, $courseSecondaryCurrency, $countMoney), 2);
				historyRecord($primaryCurrency, $countMoney, $secondaryCurrency, $convertForeignCurrency, $conn);
				echo $convertForeignCurrency;
				echo '</br>';
				echo '<a href="/">Назад</a>';
			}

		} else {
			echo 'Введите количество денег';
			echo '</br>';
			echo '<a href="/">Назад</a>';
		}
	} else {
		echo 'Конвертируемые валюты не должны совпадать';
		echo '</br>';
		echo '<a href="/">Назад</a>';
	}
 ?>