<?php 
	// Выводит красиво массив
	function print_arr($arr) {
		echo '<pre> ' . print_r($arr, true) . ' </pre>';
	}

	// Получаем масив курсов из API приватбанка
	function getCourses($link) {
		$data = file_get_contents($link);
		if(!$data) return false;
		$courses = json_decode($data, true);
		return $courses;
	}

	// Получаем курс первичной валюты
	function getCoursesPrimaryCurrency($arr, $currency) {
		foreach($arr as $course) {
			if($course['ccy'] == $currency) {
				$courseCurrency = $course['buy'];
				return $courseCurrency;
			}
		}
	}

	// Получаем курс вторичной валюты 
	function getCourseSecondaryCurrency($arr, $currency) {
		foreach($arr as $course) {
			if($course['ccy'] == $currency) {
				$courseCurrency = $course['sale'];
				return $courseCurrency;
			}
		}
	}

	// Конвертируем украинскую валюту с зарубежной
	function convertPrimaryUAH($course, $countMoney) {
		$finishMoney = $countMoney / $course;
		return $finishMoney;
	}

	// Конвертируем зарубежную валюту с гривнами
	function convertSecondaryUAH($course, $countMoney) {
		$finishMoney = $countMoney * $course;
		return $finishMoney;
	}

	// Конвертируем зарубежную валюта в зарубежную
	function convertForeignCurrency($coursePrimary, $courseSecondary, $countMoney) {
		$moneyBuy = $countMoney * $coursePrimary;
		$finishMoney = $moneyBuy / $courseSecondary;
		return $finishMoney;
	}

	// Записываем в базу данных историю конвертаций
	function historyRecord($primaryCurrency, $countPrimary, $secondaryCurrency, $countSecondary, $conn) {
		$sql = "INSERT INTO history (primaryCurrency, countPrimary, secondaryCurrency, countSecondary) 
		VALUES ('" . $primaryCurrency . "', '" . $countPrimary . "', '" . $secondaryCurrency . "', '" . $countSecondary . "')";
		mysqli_query($conn, $sql);
	}
 ?>