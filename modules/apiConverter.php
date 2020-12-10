<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/header.php";
	require_once $_SERVER['DOCUMENT_ROOT'] .'/config/config.php';
	require_once $_SERVER['DOCUMENT_ROOT'] .'/function/function.php';

	$coursesApi = getCourses($link); // Массив с курсами API приват банк
?> 
<div class="wrapper">
<?php
	if(isset($_POST['primaryCurrency'])) {
		$primaryCurrency = $_POST['primaryCurrency']; // Первичная валюта
		if(isset($_POST['secondaryCurrency'])) {
			$secondaryCurrency = $_POST['secondaryCurrency']; // Вторичная валюта
			if($_POST['coutnCurrency'] != 0) {
				$countMoney = $_POST['coutnCurrency']; // Количество денег

					if($primaryCurrency != $secondaryCurrency) { // Проверяем не совбадают ли конвертируемые валюты
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
							echo '<a href="/">На Главную</a>';
						} elseif($primaryCurrency !='UAH' && $secondaryCurrency == 'UAH') {
							// Конвертируем зарубежную валюту в гривны
							$convertSecondaryUAH = round (convertSecondaryUAH($coursePrimaryCurrency, $countMoney), 2);
							historyRecord($primaryCurrency, $countMoney, $secondaryCurrency, $convertSecondaryUAH, $conn);
							echo $convertSecondaryUAH;
							echo '</br>';
							echo '<a href="/">На Главную</a>';
						} elseif($primaryCurrency !='UAH' && $secondaryCurrency != 'UAH') {
							// Конвертируем зарубежную валюту в зарубежную
							$convertForeignCurrency = round (convertForeignCurrency($coursePrimaryCurrency, $courseSecondaryCurrency, $countMoney), 2);
							historyRecord($primaryCurrency, $countMoney, $secondaryCurrency, $convertForeignCurrency, $conn);
							echo $convertForeignCurrency;
							echo '</br>';
							echo '<a href="/">На Главную</a>';
						}
				} else {
					echo 'Конвертируемые валюты не должны совпадать';
					echo '</br>';
					echo '<a href="/">На Главную</a>';
				}

			} else {
				echo 'Введите количество валюты';
				echo '</br>';
				echo '<a href="/">На Главную</a>';
			}
		} else {
			echo 'Выберите вторичную валюту';
			echo '</br>';
			echo '<a href="/">На Главную</a>';
		}
	} else {
		echo 'Выберите первичную валюту';
		echo '</br>';
		echo '<a href="/">На Главную</a>';
	}
 ?>
 </div>