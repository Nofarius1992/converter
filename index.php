<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Currency Converter</title>
</head>
<body>
	<h1>Currency Converter</h1>

	<form id='convert' action="http://converter.local/apiConverter.php" method="POST">
			
			<div class="primaryCurrency">
				<h3>Выберите с какой валюты делать конвертацию?</h3>

				<label for="primaryUah">
					<p><input id='primaryUah' name="primaryCurrency" type="radio" value="UAH" checked> UAH </p>
				</label>
				
				<label for="primaryUsd">
					<p><input id='primaryUsd' name="primaryCurrency" type="radio" value="USD"> USD </p>
				</label>
				
				<label for="primaryEur">
					<p><input id='primaryEur' name="primaryCurrency" type="radio" value="EUR"> EUR </p>
				</label>
				
				<label for="primaryRur">
					<p><input id='primaryRur' name="primaryCurrency" type="radio" value="RUR"> RUR </p>
				</label>
			</div>
			
			<div class="secondaryCurrency">
				<h3>Выберите в какую валюту конвертировать?</h3>

				<label for="secondaryUah">
					<p><input id='secondaryUah' name="secondaryCurrency" type="radio" value="UAH"> UAH </p>
				</label>
			
				<label for="secondaryUsd">
					<p><input id='secondaryUsd' name="secondaryCurrency" type="radio" value="USD" checked> USD </p>
				</label>
				
				<label for="secondaryEur">
					<p><input id='secondaryEur' name="secondaryCurrency" type="radio" value="EUR"> EUR </p>
				</label>
				
				<label for="secondaryRur">
					<p><input id='secondaryRur' name="secondaryCurrency" type="radio" value="RUR"> RUR </p>
				</label>
			</div>
			
			<input name="coutnCurrency" type="text">
			<button type="submit">Конвертировать</button>
	</form>

	<section class='history'>
		<h3>История конвертаций</h3>
		<button>Посмотреть историю</button>
	</section>

</body>
</html>