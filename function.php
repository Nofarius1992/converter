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

	// Получаем курс вторичной валюты 
	function getCourseSecondaryCurrency($arr, $currency) {
		foreach($arr as $course) {
			if($course['ccy'] == $currency) {
				$courseCurrency = $course['buy'];
				return $courseCurrency;
			}
		}
	}

	// Конвертируем украинскую валюту гривны 
	function convertPrimaryUAH($courseSecondary, $countMoney) {
		$finishMoney = $countMoney / $courseSecondary;
		return $finishMoney;
	}

	
 ?>