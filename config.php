<?php 
	$host = 'localhost'; // адрес сервера 
	$database = 'converter'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = '123'; // пароль

	$link = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5'; // ссылка api приватбанка
	

	$conn = mysqli_connect($host, $user, $password, $database);
 ?>