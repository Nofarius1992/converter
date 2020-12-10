<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/header.php";
	include $_SERVER['DOCUMENT_ROOT'] ."/config/config.php";
	include $_SERVER['DOCUMENT_ROOT'] ."/function/function.php";

	$sql = "SELECT countHistory FROM settings";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	$count = $row['countHistory'];
    $sql = "SELECT * FROM history ORDER BY id DESC LIMIT $count";
    $result = $conn->query($sql);
 ?>
<div class="wrapper">
	<div class="history-table">
		<table border="1">
			<h3>История конвертации</h3>
			<thead>
				<tr>
					<th>Первичная валюта</th>
					<th>Вторичная валюта</th>
					<th>Дата</th>
				</tr>
			</thead>
			<tbody>
	            <?php
	                // Цыкл вывода истории конвертации
	                while ($row = mysqli_fetch_assoc($result)) {
	                    ?>
	                    <tr>
	                        <td><?php echo $row['countPrimary'] . ' ' . mb_strtolower($row['primaryCurrency']) ?></td>
	                        <td><?php echo $row['countSecondary'] . ' ' . mb_strtolower($row['secondaryCurrency']) ?></td>
	                        <td><?php echo $row['date'] ?></td>
	                    </tr>
	                    <?php
	                }
	            ?>
			</tbody>
		</table>
	</div>

	<a href="/">На Главную</a>
</div>

