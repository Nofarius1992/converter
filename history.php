<?php 
	include "config.php";
	include "function.php";

	$sql = "SELECT * FROM history ORDER BY id DESC LIMIT 5";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	print_arr($row);


 ?>

<div class="history-table">
	<table border="1">
		<caption>История конвертации</caption>
		<thead>
			<tr>
				<th>Первичная валюта</th>
				<th>Вторичная валюта</th>
				<th>Дата</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
		


	</table>
</div>


<!-- SELECT * FROM history ORDER BY id DESC LIMIT 5 -->
