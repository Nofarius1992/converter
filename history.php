<?php 
	include "config.php";
	include "function.php";

	$sql = "SELECT countHistory FROM settings";
	$result = $conn->query($sql);
	var_dump($result);
	$count = 2;
    $sql = "SELECT * FROM history ORDER BY id DESC LIMIT $count";
    $result = $conn->query($sql);
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
                    print_arr($row);
                }
            ?>
		</tbody>
	</table>
</div>


<!-- SELECT * FROM history ORDER BY id DESC LIMIT 5 -->
